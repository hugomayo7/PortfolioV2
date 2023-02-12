<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;

class ListAbouts extends EditRecord
{
    protected static string $resource = AboutResource::class;

    public function mount($record = null): void
    {
        $about = About::first();

        if($about) {
            $this->record = $about;
            $this->authorizeAccess();
            $this->fillForm();
            $this->previousUrl = url()->previous();
        } else {
            $this->redirectRoute('filament.resources.abouts.create');
        }

    }

    protected function getActions(): array
    {
        return [
            Actions\Action::make('download')->action('downloadCV')->label('Télécharger le CV')
        ];
    }

    public function downloadCV()
    {
        $this->redirectRoute('download-cv');
    }
}
