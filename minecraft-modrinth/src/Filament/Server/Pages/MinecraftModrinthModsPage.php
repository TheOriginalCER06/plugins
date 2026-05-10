<?php

namespace Boy132\MinecraftModrinth\Filament\Server\Pages;

use Boy132\MinecraftModrinth\Enums\ModrinthProjectType;

class MinecraftModrinthModsPage extends MinecraftModrinthProjectPage
{
    protected static ?string $slug = 'modrinth/mods';

    protected static ?int $navigationSort = 30;

    protected static ?ModrinthProjectType $projectType = ModrinthProjectType::Mod;
}
