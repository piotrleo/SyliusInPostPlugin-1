<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace Tests\BitBag\SyliusInPostPlugin\Behat\Page\Admin\ShippingGateway;

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{
    public function selectShippingMethod(string $name): void;

    public function selectFieldOption(string $field, string $option): void;

    public function fillField(string $field, string $value): void;

    public function submit(): void;

    public function hasError(string $message, string $errorClass = '.sylius-validation-error'): bool;
}
