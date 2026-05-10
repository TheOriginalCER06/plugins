<?php

namespace Boy132\MinecraftModrinth\Filament\Server\Pages;

use Boy132\MinecraftModrinth\Enums\ModrinthProjectType;

class MinecraftModrinthPluginsPage extends MinecraftModrinthProjectPage
{
    protected static ?string $slug = 'modrinth/plugins';

    protected static ?int $navigationSort = 31;

    protected static ?ModrinthProjectType $projectType = ModrinthProjectType::Plugin;
}
