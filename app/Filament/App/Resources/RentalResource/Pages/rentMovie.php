<?php

namespace App\Filament\App\Resources\RentalResource\Pages;
use App\Models\Movie;
use App\Filament\App\Resources\RentalResource;
use Filament\Resources\Pages\Page;

class rentMovie extends Page
{
    protected static string $resource = RentalResource::class;

    protected static string $view = 'filament.app.resources.rental-resource.pages.rent-movie';

    protected static ?string $navigationLabel = 'Rentar Pelicula';

    public function getMovies(){
        return Movie::all();
    }
}
