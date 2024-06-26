<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Classes\DataHandling;

use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\DataHandling\DataHandler;

final class MyClass
{
    public function __construct(
        private readonly DataHandler $dataHandler,
    ) {}

    public function useAlternativeUser(BackendUserAuthentication $alternativeBackendUser): void
    {
        // Prepare the data array
        $data = [
            // ... the data ...
        ];

        // Prepare the cmd array
        $cmd = [
            // ... the cmd structure ...
        ];

        $this->dataHandler->start($data, $cmd, $alternativeBackendUser);
        $this->dataHandler->process_datamap();
        $this->dataHandler->process_cmdmap();
    }
}
