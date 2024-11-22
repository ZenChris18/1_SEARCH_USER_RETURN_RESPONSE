<?php
include 'dbconfig.php';

function createApplicant($data) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("INSERT INTO applicants (firstName, lastName, yearsOfExperience, specialization, barMembershipNumber, email, favoriteLegalField, preferredCourt, bio) 
                               VALUES (:firstName, :lastName, :yearsOfExperience, :specialization, :barMembershipNumber, :email, :favoriteLegalField, :preferredCourt, :bio)");
        $stmt->execute($data);
        return ['message' => 'User has been inserted successfully', 'statusCode' => 200];
    } catch (Exception $e) {
        return ['message' => 'Error: ' . $e->getMessage(), 'statusCode' => 400];
    }
}

function getApplicantById($id) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM applicants WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ['message' => 'Query successful', 'statusCode' => 200, 'querySet' => $result];
    } catch (Exception $e) {
        return ['message' => 'Error: ' . $e->getMessage(), 'statusCode' => 400];
    }
}

function updateApplicant($id, $data) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("UPDATE applicants SET firstName = :firstName, lastName = :lastName, yearsOfExperience = :yearsOfExperience, specialization = :specialization, 
                               barMembershipNumber = :barMembershipNumber, email = :email, favoriteLegalField = :favoriteLegalField, preferredCourt = :preferredCourt, bio = :bio
                               WHERE id = :id");
        $data['id'] = $id;
        $stmt->execute($data);
        return ['message' => 'User has been updated successfully', 'statusCode' => 200];
    } catch (Exception $e) {
        return ['message' => 'Error: ' . $e->getMessage(), 'statusCode' => 400];
    }
}

function deleteApplicant($id) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("DELETE FROM applicants WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return ['message' => 'User has been deleted successfully', 'statusCode' => 200];
    } catch (Exception $e) {
        return ['message' => 'Error: ' . $e->getMessage(), 'statusCode' => 400];
    }
}

function searchApplicants($keyword) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM applicants WHERE 
                               firstName LIKE :keyword OR lastName LIKE :keyword OR 
                               specialization LIKE :keyword OR barMembershipNumber LIKE :keyword OR 
                               email LIKE :keyword OR favoriteLegalField LIKE :keyword OR 
                               preferredCourt LIKE :keyword");
        $stmt->execute(['keyword' => "%$keyword%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ['message' => 'Search successful', 'statusCode' => 200, 'querySet' => $results];
    } catch (Exception $e) {
        return ['message' => 'Error: ' . $e->getMessage(), 'statusCode' => 400];
    }
}
?>
