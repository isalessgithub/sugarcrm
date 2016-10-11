var EontekCache = (function () {
  /**
   * Contains all cached requests
   */
  var requests = [];

  /**
   * Get empty request object
   *
   * @returns {{request: {}, state: boolean, response: {}, subscribers: Array, expires: number}}
   */
  var getRequestTemplate = (function (request_params, context) {

    // process request_params and setup all the defaults

    /**
     * Request name
     */
    var request = {
      type: request_params.type,
      url: request_params.url,
      data: request_params.data
    };

    /**
     * State type
     *
     * int
     * 0 - unprocessed
     * 1 - processing
     * 2 - done
     */
    var state = 0;

    /**
     * Cached response
     */
    var response = {};

    /**
     * List of subscribed calls
     */
    var subscribers = [{
      context: context,
      success: request_params.success,
      error: request_params.error
    }];

    /**
     * Time in miliseconds after what cache expires
     */
    var expires = Date.now() + 43200000;

    var notifySubscribers = function () {

      // go trough each subscriber
      _.each(subscribers, function (subscriber, index, iteratedList) {
        // DETECT IF WE CALL SUCCESS OR ERROR
        subscriber.success.call(subscriber.context, response);
      });
      
      // reset all subscribers
      subscribers = [];
    };

    return {

      // return public methods this object has
      getRequest: function () {
        return request;
      },
      getResponse: function () {
        return response;
      },
      getSubscribers: function () {
        return subscribers;
      },
      addNewSubscriber: function (requestObject) {
        // go trough each request object
        $.each(requestObject.getSubscribers(), function (index, newSubscriber) {

          // add new subsriber
          subscribers.push(newSubscriber);
        });
      },
      selfProcess: function () {
        var self = this;
        
        // check if complete
        if(state == 2 && expires > Date.now()){
          notifySubscribers();
        }

        // IF I AM, CHECK IF I AM EXPIRED

        // IF I'M NOT EXPIRED NOTIFY ALL SUBSCRIBERS WITH RESPONSE AND REMOVE SUBSCRIBERS
        // notifySubscribers();

        // execute request
        if(state == 0){
          state = 1;
          SUGAR.App.api.call(request.type, SUGAR.App.api.buildURL(request.url), request.data, {
            success: function (data) {

              response = data;
              state = 2;
              notifySubscribers();
            },
            error: function () {
              // TODO: ERROR HANDLING !
            }
          });
        }
      }
    }
  });

  var processRequest = function (requestObject) {
    var foundRequest;
    var request = requestObject.getRequest();

    // search for existing request
    $.each(requests, function (index, savedRequest) {
      
      // check if all parameters match
      var saved_request = savedRequest.getRequest();

      // IF ALL PARAMETERS MATCH
      if (saved_request.type == request.type && saved_request.url == request.url && JSON.stringify(saved_request.data) === JSON.stringify(request.data)) {
        foundRequest = savedRequest;
        foundRequest.addNewSubscriber(requestObject);
      }
    });

    // NO REQUEST FOUND
    // add request to list of cache drequests
    if(typeof (foundRequest) == 'undefined'){
      foundRequest = requestObject;
      requests.push(requestObject);
    }
    // ALWAYS CALL THIS IN THE END
    // call processing of this request
    foundRequest.selfProcess();
  };

  return {
    /**
     * Ajax call to Sugar api endpoint
     *
     * @param request_params
     * @param context
     */
    sugarRequest: function (request_params, context) {

      // generate request object from arguments
      var requestObject = getRequestTemplate(request_params, context);

      // call handle request function inside request object
      processRequest(requestObject);

      // return
      return;
    }
  };
})();