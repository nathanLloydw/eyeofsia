<?php return array (
  'ajthinking/archetype' => 
  array (
    'dont-discover' => 
    array (
    ),
    'providers' => 
    array (
      0 => 'Archetype\\ServiceProvider',
    ),
  ),
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'laravel/sail' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/sanctum' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'rebing/graphql-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'Rebing\\GraphQL\\GraphQLServiceProvider',
    ),
    'aliases' => 
    array (
      'GraphQL' => 'Rebing\\GraphQL\\Support\\Facades\\GraphQL',
    ),
  ),
  'statamic/cms' => 
  array (
    'providers' => 
    array (
      0 => 'Statamic\\Providers\\StatamicServiceProvider',
    ),
    'aliases' => 
    array (
      'Statamic' => 'Statamic\\Statamic',
    ),
  ),
  'wilderborn/partyline' => 
  array (
    'providers' => 
    array (
      0 => 'Wilderborn\\Partyline\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Partyline' => 'Wilderborn\\Partyline\\Facade',
    ),
  ),
);