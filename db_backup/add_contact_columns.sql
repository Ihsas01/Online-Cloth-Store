-- Migration: Add phone and subject columns to contact table
ALTER TABLE contact
  ADD COLUMN phone VARCHAR(100) DEFAULT NULL,
  ADD COLUMN subject VARCHAR(100) DEFAULT NULL; 