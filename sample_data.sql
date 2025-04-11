-- Sample Teachers
INSERT INTO teachers (name, address, phone_number, annual_salary, background_check)
VALUES 
('Mr. John Smith', '123 Elm St', '07711223344', 32000.00, TRUE),
('Mrs. Jane Doe', '456 Oak Rd', '07755667788', 33000.00, TRUE);

-- Sample Classes
INSERT INTO classes (class_name, capacity, teacher_id)
VALUES 
('Year One', 30, 1),
('Year Two', 28, 2);

-- Sample Pupils
INSERT INTO pupils (name, address, medical_info, class_id)
VALUES 
('Alice Brown', '789 Maple Ave', 'Asthma', 1),
('Charlie Green', '321 Birch Ln', 'None', 2);

-- Sample Parents
INSERT INTO parents (name, address, email, telephone)
VALUES 
('Susan Brown', '789 Maple Ave', 'susan.brown@example.com', '07788990011'),
('Michael Green', '321 Birch Ln', 'mike.green@example.com', '07799001122');

-- Link Parents to Pupils
INSERT INTO pupil_parent (pupil_id, parent_id) VALUES (1, 1);
INSERT INTO pupil_parent (pupil_id, parent_id) VALUES (2, 2);
