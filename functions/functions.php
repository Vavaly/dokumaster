<?php
include 'config.php';

// Create Document
function createDocument($folder_id, $document_name, $file_path, $file_type, $file_size, $uploaded_by) {
    global $pdo;
    $sql = "INSERT INTO documents (folder_id, document_name, file_path, file_type, file_size, uploaded_by) 
            VALUES (:folder_id, :document_name, :file_path, :file_type, :file_size, :uploaded_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':folder_id' => $folder_id,
        ':document_name' => $document_name,
        ':file_path' => $file_path,
        ':file_type' => $file_type,
        ':file_size' => $file_size,
        ':uploaded_by' => $uploaded_by
    ]);
}

// Read Documents
function getDocuments() {
    global $pdo;
    $sql = "SELECT * FROM documents";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

// Update Document
function updateDocument($document_id, $document_name, $file_path, $file_type, $file_size) {
    global $pdo;
    $sql = "UPDATE documents SET document_name = :document_name, file_path = :file_path, 
            file_type = :file_type, file_size = :file_size WHERE document_id = :document_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':document_name' => $document_name,
        ':file_path' => $file_path,
        ':file_type' => $file_type,
        ':file_size' => $file_size,
        ':document_id' => $document_id
    ]);
}

// Delete Document
function deleteDocument($document_id) {
    global $pdo;
    $sql = "DELETE FROM documents WHERE document_id = :document_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':document_id' => $document_id]);
}

// Create User by Admin
function createUser($username, $password, $email, $full_name, $role) {
    global $pdo;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, email, full_name, role) 
            VALUES (:username, :password, :email, :full_name, :role)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':password' => $hashed_password,
        ':email' => $email,
        ':full_name' => $full_name,
        ':role' => $role
    ]);
}
?>
