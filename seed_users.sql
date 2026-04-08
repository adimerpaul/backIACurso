-- Delete existing users
DELETE FROM users;

-- Insert 10 users
INSERT INTO users (name, email, password, created_at, updated_at) VALUES 
('Juan García', 'juan.garcia@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('María Rodríguez', 'maria.rodriguez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Carlos López', 'carlos.lopez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Ana Martínez', 'ana.martinez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Pedro Fernández', 'pedro.fernandez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Laura Sánchez', 'laura.sanchez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Diego Gómez', 'diego.gomez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Sofia Morales', 'sofia.morales@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Miguel Hernández', 'miguel.hernandez@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now')),
('Isabela Romero', 'isabela.romero@example.com', '$2y$12$9Z5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8Q4g1N5V7K9e.hZ5q1l3OL8', datetime('now'), datetime('now'));

-- Verify
SELECT COUNT(*) as total FROM users;
