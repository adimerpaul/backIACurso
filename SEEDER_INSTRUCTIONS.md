# 🌱 Seeder de Usuarios - Instrucciones

He creado un sistema de seeding de usuarios en Laravel. Aquí está lo que se ha implementado:

## ✅ Cambios Realizados

### 1. **Seeder de Usuarios** (`database/seeders/UserSeeder.php`)
   - Crea 10 usuarios con datos realistas españoles
   - Cada usuario tiene nombre, email y contraseña hasheada

### 2. **Base de Datos Seeder** (`database/seeders/DatabaseSeeder.php`)
   - Actualizado para llamar al UserSeeder
   - Ejecuta automáticamente el seeding

### 3. **Controller de Usuarios** (`app/Http/Controllers/UserController.php`)
   - Actualizado para traer datos desde la BD en lugar de arrays fijos
   - Método `index()`: devuelve todos los usuarios
   - Método `show($id)`: devuelve un usuario específico

### 4. **API Routes** (`routes/api.php`)
   - **GET /api/seed-users** - Endpoint para crear los 10 usuarios
   - **GET /api/users** - Obtiene todos los usuarios
   - **GET /api/users/{id}** - Obtiene un usuario específico

### 5. **HTML de Seeding** (`public/seed.html`)
   - Interfaz web para ejecutar el seed
   - Muestra los usuarios después de crear
   - Accede en el navegador

## 🚀 Cómo Usar

### Opción 1: Desde la Web (Más Fácil)
1. Inicia el servidor Laravel: `php artisan serve`
2. Abre en el navegador: `http://localhost:8000/seed.html`
3. Haz clic en "Crear 10 Usuarios"
4. Los usuarios aparecerán listados automáticamente

### Opción 2: Desde Terminal
```bash
# Ejecutar migraciones y seeding
php artisan migrate:fresh --seed

# O solo seeders si las migraciones ya existen
php artisan db:seed
```

### Opción 3: API Directa
```bash
# Crear usuarios
curl http://localhost:8000/api/seed-users

# Obtener todos los usuarios
curl http://localhost:8000/api/users

# Obtener un usuario específico
curl http://localhost:8000/api/users/1
```

## 👥 Los 10 Usuarios Creados

1. Juan García - juan.garcia@example.com
2. María Rodríguez - maria.rodriguez@example.com
3. Carlos López - carlos.lopez@example.com
4. Ana Martínez - ana.martinez@example.com
5. Pedro Fernández - pedro.fernandez@example.com
6. Laura Sánchez - laura.sanchez@example.com
7. Diego Gómez - diego.gomez@example.com
8. Sofia Morales - sofia.morales@example.com
9. Miguel Hernández - miguel.hernandez@example.com
10. Isabela Romero - isabela.romero@example.com

Contraseña para todos: `password123`

## 📊 Respuesta de la API

### GET /api/users
```json
{
    "success": true,
    "message": "Usuarios obtenidos correctamente",
    "data": [
        {
            "id": 1,
            "name": "Juan García",
            "email": "juan.garcia@example.com"
        },
        ...
    ],
    "total": 10
}
```

## 📝 Notas Importantes

- El endpoint `/api/seed-users` solo funciona en ambiente local (no en producción)
- Los datos se guardan en la BD SQLite
- Puedes ejecutar el seed varias veces sin problemas (elimina duplicados)
- Todos los usuarios tienen contraseña: `password123`
