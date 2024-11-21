<?php

declare(strict_types=1);

namespace Ejemplos\Observer\met_station;

interface Subject
{
    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers(): void;
}
