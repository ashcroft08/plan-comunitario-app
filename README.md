# Plan Comunitario de Gestión de Riesgos

Aplicación web para la elaboración y gestión del **Plan Comunitario de Gestión de Riesgos de Desastres**, una herramienta utilizada a nivel comunitario para inventariar recursos, amenazas, vulnerabilidades y capacidades locales.

Desarrollada con **Lumen (Laravel)** para el backend y vistas HTML con **Bootstrap** para el frontend.

## Funcionalidades

El sistema cubre los módulos típicos de un plan comunitario de gestión de riesgos:

- **Datos generales de la comunidad:** provincia, habitantes, delegado, responsables y documentación.
- **Identificación de amenazas:** registro y descripción de amenazas locales.
- **Vulnerabilidad y riesgo:** descripción de vulnerabilidades y análisis de riesgo.
- **Priorización de amenazas** y **diagnóstico de capacidad** de la comunidad.
- **Mecanismo de alarma** y **zonas de seguridad.**
- **Matriz de recursos de la comunidad** para la respuesta local.
- **Histórico** de eventos.

## Tech Stack

| Capa      | Tecnología                          |
|-----------|-------------------------------------|
| Backend   | PHP · Lumen (Laravel) micro-framework |
| Frontend  | HTML · CSS · Bootstrap              |
| DB        | MySQL (mediante el ORM de Lumen)    |
| Testing   | PHPUnit                            |
| Paquetes  | Composer                           |

## Estructura

```
app/         → lógica de la aplicación (Lumen)
routes/      → rutas web (web.php)
resources/views/  → vistas HTML
public/      → assets públicos
bootstrap/   → bootstrap de la app
database/    → migrations y seeders
tests/       → tests PHPUnit
```

## Cómo ejecutarlo

```bash
composer install
cp .env.example .env
# Configurar credenciales de BD en .env
php -S localhost:8000 -t public
```

## Sobre la implementación

Las rutas (`routes/web.php`) exponen directamente las vistas de cada módulo del plan comunitario. El proyecto aprovecha el enrutamiento limpio y liviano de Lumen para servir una aplicación administrativa donde varias vistas forman un flujo guiado de llenado del plan.