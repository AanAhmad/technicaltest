<?php

class OrderModel
{
    private $table = 'booking';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrder()
    {
        $this->db->query("SELECT booking.*, vehicles.vehicle_name, driver.driver_name, user1.name AS aprv1_name, user2.name AS aprv2_name
            FROM booking
            JOIN vehicles ON vehicles.vehicle_id = booking.vehicle_id
            JOIN driver ON driver.driver_id = booking.driver_id
            JOIN users AS user1 ON user1.id = booking.aprv1_id
            JOIN users AS user2 ON user2.id = booking.aprv2_id
            WHERE booking.aprv1_id <> booking.aprv2_id AND (aprv1_id=:id OR aprv2_id=:id)");
        $this->db->bind('id', $_SESSION['id']);
        return $this->db->resultSet();
    }

    public function getOrderById($id)
    {
        $this->db->query('SELECT booking.*, vehicles.vehicle_name, driver.driver_name, user1.name AS aprv1_name, user2.name AS aprv2_name
        FROM booking
        JOIN vehicles ON vehicles.vehicle_id = booking.vehicle_id
        JOIN driver ON driver.driver_id = booking.driver_id
        JOIN users AS user1 ON user1.id = booking.aprv1_id
        JOIN users AS user2 ON user2.id = booking.aprv2_id WHERE booking_id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateDataOrder($data)
{
    if ($_SESSION['id'] == $_POST['aprv1_id']) {
        $aprv = "aprv1";
    } elseif ($_SESSION['id'] == $_POST['aprv2_id']) {
        $aprv = "aprv2";
    }

    if (!empty($aprv)) {
        $query = "UPDATE " . $this->table . " SET " . $aprv . "_status=:status, " . $aprv . "_note=:note WHERE booking_id=:booking_id";
        $this->db->query($query);
        $this->db->bind('booking_id', $data['booking_id']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('note', $data['note']);
        $this->db->execute();

        $checkQuery = "SELECT aprv1_status, aprv2_status FROM " . $this->table . " WHERE booking_id=:booking_id";
        $this->db->query($checkQuery);
        $this->db->bind('booking_id', $data['booking_id']);
        $result = $this->db->single();

        if ($result['aprv1_status'] !== null || $result['aprv2_status'] !== null) {
            if ($result['aprv1_status'] == 'Setuju' && $result['aprv2_status'] == 'Setuju') {
                $updateStatusQuery = "UPDATE " . $this->table . " SET status='Disetujui' WHERE booking_id=:booking_id";
                $this->db->query($updateStatusQuery);
                $this->db->bind('booking_id', $data['booking_id']);
                $this->db->execute();
            } else {
                $updateStatusQuery = "UPDATE " . $this->table . " SET status='Ditolak' WHERE booking_id=:booking_id";
                $this->db->query($updateStatusQuery);
                $this->db->bind('booking_id', $data['booking_id']);
                $this->db->execute();
            }
        } else {
            return 0;
        }
        return $this->db->rowCount();
    } else {
        return 0;
    }
}

}
