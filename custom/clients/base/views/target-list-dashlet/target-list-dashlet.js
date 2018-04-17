({
    plugins: ['Dashlet'],
  
    tlists: {},
   
    events:{
        
    },

    refresh:function(){
       this.loadData();
    },

      
    loadData: function (options) {
             
        self=this;
         
        app.api.call('GET', app.api.buildURL('GetTargetLists/'+this.model.get('parent_id')), null, {
        success: _.bind( function (data){
          console.log(data);
          this.tlists=data;
          this.render(); 
        },this)});
     }
})
