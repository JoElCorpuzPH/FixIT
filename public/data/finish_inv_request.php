<?php
session_start();
header('Content-Type: application/json');
require_once __DIR__ . "/../../db.php"; 
$ticket_id = isset($_POST['ticket_id']) ? $_POST['ticket_id'] : null;

if (!$ticket_id) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields.']);
    exit;
}
$employeeId = $_SESSION['employee_id'];
try {

    $sql = "UPDATE inventory_request 
            SET status_id = 5,
                received_by_employee = :eid, 
                date_returned = NOW(), 
                updated_at = NOW() 
            WHERE i_ticket_id = :tid";
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute([
        'eid' => $employeeId,
        'tid' => $ticket_id
    ]);

    if ($success) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update database.']);
    }

} catch (PDOException $e) {
    // Return the actual SQL error for debugging
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}

?>