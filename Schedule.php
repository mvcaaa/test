<?php

class Schedule {

	private $stations = array('Prince', 'Rector', 'Spring', 'Times');
	private $arrivingTrains = array();
	private $departingTrains = array();

	function addArriving(Train $train, $stationId) {
		$this->arrivingTrains[] = array($this->stations[$stationId] => $train);
	}

}

?>
