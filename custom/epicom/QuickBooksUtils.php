<?php

class QuickBooksUtils
{
    public function updateDaysOutstanding()
    {
        global $db;

        $sql = "SELECT id FROM atc_clients a INNER JOIN atc_clients_cstm ac ON a.id=ac.id_c WHERE ac.esb_listid_c IS NOT NULL";
        $res = $db->query($sql);

        while ($row = $db->fetchRow($res)) {
            $q = "SELECT MIN(qt.txn_date) AS date
                FROM atc_clients_esb_qb_transactions_1_c aqt
                LEFT JOIN esb_qb_transactions qt ON qt.id = aqt.atc_clients_esb_qb_transactions_1esb_qb_transactions_idb
                WHERE aqt.atc_clients_esb_qb_transactions_1atc_clients_ida='".$row['id']."' AND qt.txn_status='Payable'";
            $r = $db->fetchOne(preg_replace('/\s+/', ' ', $q));
            $day_diff = 0;
            if (!empty($r['date'])) {
                $txn_stamp = strtotime($r['date']);
                $txn_diff = time() - $txn_stamp;
                $day_diff = floor($txn_diff / (60 * 60 * 24));
            }

            $db->query("UPDATE atc_clients_cstm SET esb_days_outstanding_c = '".$day_diff."' WHERE id_c = '".$row['id']."'");
        }

        return true;
    }
}
