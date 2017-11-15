<?php

namespace Kunstwerken;

interface InternetMediumInterface {
    public function getUri(): ?string;
    public function setUri(string $uri);
}