-- Alterar a tabela de consultas para adicionar a restrição de chave estrangeira com ON DELETE CASCADE
ALTER TABLE consultas
DROP CONSTRAINT IF EXISTS fk_paciente,
ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente_id)
REFERENCES pacientes(id)
ON DELETE CASCADE;

-- Alterar a tabela de prontuários para adicionar a restrição de chave estrangeira com ON DELETE CASCADE
ALTER TABLE prontuarios
DROP CONSTRAINT IF EXISTS fk_paciente,
ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente_id)
REFERENCES pacientes(id)
ON DELETE CASCADE;

_____________________________________________________________________________________________________

-- Remover a restrição de chave estrangeira com ON DELETE CASCADE na tabela de consultas
ALTER TABLE consultas
DROP CONSTRAINT IF EXISTS fk_paciente,
ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente_id)
REFERENCES pacientes(id);

-- Remover a restrição de chave estrangeira com ON DELETE CASCADE na tabela de prontuários
ALTER TABLE prontuarios
DROP CONSTRAINT IF EXISTS fk_paciente,
ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente_id)
REFERENCES pacientes(id);
