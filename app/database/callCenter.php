<?php

class CallCenter{
    public $data =[
        [
            'area' => 'Online Area Surabaya/Sidoarjo',
            'telp' => '081222333444'
        ],
        [
            'area' => 'Offline Area Surabaya/Sidoarjo',
            'telp' => '031555666777'
        ],
        [
            'area' => 'Online Diluar Surabaya/Sidoarjo',
            'telp' => '021888999111'
        ],
        [
            'area' => 'Offline Diluar Area Surabaya/Sidoarjo',
            'telp' => '082111555666'
        ]
    ];

    public function getDataCS(){
        return $this->data;
    }
   

    public function countDataCS(){
        return count($this->data);
    }
}
?>