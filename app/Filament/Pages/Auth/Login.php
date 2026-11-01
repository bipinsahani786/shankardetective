<?php

namespace App\Filament\Pages\Auth;

use Filament\Actions\Action;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Contracts\Support\Htmlable;

class Login extends BaseLogin
{
    public function getTitle(): string|Htmlable
    {
        return 'Case Directorate Portal | Deep Trace Detective';
    }

    public function getHeading(): string|Htmlable|null
    {
        return '';
    }

    public function getSubheading(): string|Htmlable|null
    {
        return '';
    }

    protected function hasFullWidthFormActions(): bool
    {
        return true;
    }

    protected function getAuthenticateFormAction(): Action
    {
        return parent::getAuthenticateFormAction()
            ->label('Authenticate & Enter Case Control Room →');
    }
}

