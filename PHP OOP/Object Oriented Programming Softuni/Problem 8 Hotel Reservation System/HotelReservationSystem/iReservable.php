<?php

interface iReservable
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}