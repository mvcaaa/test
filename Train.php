<?php

class Train {

	private $registrationNumber;
	private $merchandise;
	private $enRouteStations = array('Prince', 'Rector', 'Spring', 'Times');
	private $willArriveTo;
	private $justLeft;

	function __construct($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	function startTrip($dateAndTime) {
		$this->justLeft = $this->enRouteStations[0];
		$this->willArriveTo = $this->enRouteStations[1];

		//setDateAndTimeInDatabase
	}

	function finishTrip($dateAndTime) {
		//setDateAndTimeInDatabase
	}

	function setPassedNextStation() {
		$this->justLeft = $this->willArriveTo;
		$this->willArriveTo = $this->enRouteStations[
			(array_search($this->justLeft, $this->enRouteStations) + 1)
			];
	}

}

?>
