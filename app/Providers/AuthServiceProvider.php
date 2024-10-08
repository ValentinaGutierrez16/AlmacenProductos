<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Clientes;
use App\Models\Compras;
use App\Models\User;
use App\Models\Role;
use App\Models\Productos;
use App\Models\Ventas;
use App\Models\Proveedores;


use App\Policies\ProveedoresPolicy;
use App\Policies\ComprasPolicy;
use App\Policies\VentasPolicy;
use App\Policies\RolesPolicy;
use App\Policies\UserPolicy;
use App\Policies\ClientesPolicy;
use App\Policies\ProductosPolicy;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Clientes::class => ClientesPolicy::class,
        Compras::class => ComprasPolicy::class,
        Productos::class => ProductosPolicy::class,
        Proveedores::class => ProveedoresPolicy::class,
        Role::class => RolesPolicy::class,
        User::class => UserPolicy::class,
        Ventas::class => VentasPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
