<?php/* * To change this template, choose Tools | Templates * and open the template in the editor. */class ProductCat extends CWidget {    public function init() {        parent::init();    }    public function getCat() {        $cri = new CDbCriteria(array(                    'condition' => 'parent_id = 0',                    'order' => 'sort_order asc ,cate_id asc',                ));        $pcat = Pcat::model()->findAll($cri);        return $pcat;    }    public function getPinpai() {        $cri = new CDbCriteria(array(                    'order' => 'sort_order asc',                ));        $pinpai = Pinpai::model()->findAll($cri);        return $pinpai;    }    public function run() {        $this->render('productCat');    }}