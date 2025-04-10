<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        overflow: hidden;
    }

    .edit-form-container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        display: none;
        background-color: rgba(30, 40, 70);
        padding: 20px;
        border-radius: 10px;
        color: #eee;
        width: 20%;
        max-width: 600px;
    }

    #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    #contain {
        flex: 1;
    }

    .list {
        width: auto;
        max-height: 600px;
        overflow-y: auto;
        overflow-x: hidden;
        border: 1px solid #555;
        border-radius: 5px;
        margin-bottom: 20px;
        scrollbar-width: thin;
        scrollbar-color: rgba(0, 188, 212, 0.7) rgba(34, 34, 34, 0.7);
    }

    .list::-webkit-scrollbar {
        width: 10px;
    }

    .list::-webkit-scrollbar-track {
        background-color: rgba(34, 34, 34, 0.7);
        border-radius: 5px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .list::-webkit-scrollbar-thumb {
        background-color: rgba(0, 188, 212, 0.7);
        border-radius: 5px;
        border: 2px solid rgba(34, 34, 34, 0.7);
    }

    .list::-webkit-scrollbar-thumb:hover {
        background-color: rgba(0, 148, 169, 0.9);
    }

    .list::-webkit-scrollbar-thumb:active {
        background-color: rgba(0, 188, 212, 0.9);
    }

    #showtimeTable {
        width: 100%;
        border-collapse: collapse;
        color: #eee;
        margin: auto;
    }

    #showtimeTable th,
    #showtimeTable td {
        padding: 10px 15px;
        text-align: left;
        border-bottom: 3px solid #333;
    }

    #showtimeTable th {
        background-color: rgba(80, 90, 120, 0.7);
        font-weight: bold;
        text-shadow: 0 0 5px #00bcd4;
    }

    #showTable tr:nth-child(even) {
        background-color: rgba(50, 60, 90, 0.5);
    }

    #showtimeTable .delete {
        background-color: #e53935;
        color: #eee;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #showtimeTable .delete:hover {
        background-color: #b71c1c;
    }

    #showtimeTable .update {
        background-color: #e53935;
        color: #eee;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #showtimeTable .update:hover {
        background-color: #b71c1c;
    }

    .edit-form-container {
    /* Existing styles */
    width: 40%; /* Adjust width as needed */
    padding: 30px; /* Increase padding for more internal space */
  }

  .form-group {
    margin-bottom: 20px; /* Increase spacing between form groups */
  }

  .form-group label {
    display: block;
    margin-bottom: 8px; /* Increase spacing between label and input */
    color: #ccc;
    font-size: 1.1em; /* Slightly larger font for labels */
  }

  .form-group input[type="number"],
  .form-group input[type="date"],
  .form-group input[type="time"],
  .form-group select {
    width: calc(100% - 16px); /* Adjust for increased padding */
    padding: 10px; /* Increase padding for input fields */
    margin-bottom: 8px; /* Increase spacing below input fields */
    border: 1px solid #777;
    border-radius: 5px;
    background-color: #444;
    color: #eee;
    box-sizing: border-box;
    font-size: 1em; /* Slightly larger font for input text */
  }

  .form-group button {
    padding: 12px 20px; /* Increase padding for buttons */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold;
    font-size: 1em; /* Slightly larger font for button text */
  }

  .form-group button[type="submit"] {
    background-color: rgb(4, 63, 150);
    color: #fff;
    margin-right: 10px; /* Add some space between buttons */
  }

  .form-group button[type="button"] {
    background-color: rgb(197, 13, 0);
    color: #eee;
  }

  .error-message {
    color: #ff9800; /* Amber for errors */
    margin-bottom: 15px; /* Increase spacing */
    padding: 10px; /* Increase padding */
    border: 1px solid #ffb300;
    border-radius: 5px;
    background-color: rgba(255, 179, 0, 0.1);
    font-size: 1em; /* Slightly larger font */
  }

  .success-message {
    color: #4caf50; /* Green for success */
    margin-bottom: 15px; /* Increase spacing */
    padding: 10px; /* Increase padding */
    border: 1px solid #81c784;
    border-radius: 5px;
    background-color: rgba(76, 175, 80, 0.1);
    font-size: 1em; /* Slightly larger font */
  }

  .edit-form-container h2 {
    color: #00bcd4;
    margin-top: 0;
    margin-bottom: 25px; /* Increase spacing below the heading */
    text-align: center;
    font-size: 1.5em; /* Slightly larger heading */
    text-shadow: 0 0 8px #00bcd4; /* Enhance text shadow */
  }
  
</style>
<div class="list">
    <table id="showtimeTable">
        <thead>
            <tr>
                <th>Showtime ID</th>
                <th>Cinema ID</th>
                <th>Movie ID</th>
                <th>Default Rows</th>
                <th>VIP Rows</th>
                <th>Columns</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result_showtimes_data->num_rows > 0) {
                while ($row = $result_showtimes_data->fetch_assoc()) {
                    echo '<tr>';
                    echo '    <td>' . htmlspecialchars($row["showtime_id"]) . '</td>';
                    echo '    <td>' . htmlspecialchars($row["cinema_id"]) . '</td>';
                    echo '    <td>' . htmlspecialchars($row["movie_id"]) . '</td>';
                    echo '    <td>' . htmlspecialchars($row["default_row"]) . '</td>';
                    echo '    <td>' . htmlspecialchars($row["vip_row"]) . '</td>';
                    echo '    <td>' . htmlspecialchars($row["n_column"]) . '</td>';
                    echo '    <td>' . htmlspecialchars(date("d M Y", strtotime($row["date"]))) . '</td>';
                    echo '    <td>' . htmlspecialchars(date("h:i A", strtotime($row["time"]))) . '</td>';
                    echo '    <td>';
                    echo '        <span class="update" style="margin-right: 5px; cursor: pointer;" href=\'?edit_id=' . htmlspecialchars($row["showtime_id"]) . '\' onclick="showEditPopup(\'' . htmlspecialchars($row["showtime_id"]) . '\')">Edit</span>';
                    echo '        <button class="delete" onclick="if(confirm(\'Are you sure you want to delete this showtime?\')) { window.location.href=\'?delete_id=' . htmlspecialchars($row["showtime_id"]) . '\'; }">Delete</button>';
                    echo '    </td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="9">No showtimes found.</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<div id="overlay"> </div> <?php if ($show_edit_form && $edit_showtime_id): ?>
    <div class="edit-form-container" id="editFormContainer">
        <h2>Edit Showtime (ID: <?php echo htmlspecialchars($edit_showtime_id); ?>)</h2>
        <?php if (!empty($edit_errors)): ?>
            <div class="error-message">
                <?php foreach ($edit_errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($edit_success_message)): ?>
            <div class="success-message">
                <p><?php echo htmlspecialchars($edit_success_message); ?></p>
            </div>
        <?php endif; ?>
        <form method="post">
            <input type="hidden" name="showtime_id" value="<?php echo htmlspecialchars($edit_showtime_id); ?>">

            <div class="form-group">
                <label for="cinema_id">Cinema ID:</label>
                <select name="cinema_id" id="cinema_id">
                    <?php foreach ($cinemas as $cinema): ?>
                        <option value="<?php echo htmlspecialchars($cinema["cinema_id"]); ?>" <?php if ($cinema["cinema_id"] == $edit_cinema_id) echo 'selected'; ?>><?php echo htmlspecialchars($cinema["cinema_name"]); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="movie_id">Movie ID:</label>
                <select name="movie_id" id="movie_id">
                    <?php foreach ($movies as $movie): ?>
                        <option value="<?php echo htmlspecialchars($movie["movie_id"]); ?>" <?php if ($movie["movie_id"] == $edit_movie_id) echo 'selected'; ?>><?php echo htmlspecialchars($movie["movie_name"]); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="default_row">Default Rows:</label>
                <input type="number" name="default_row" id="default_row" value="<?php echo htmlspecialchars($edit_default_row); ?>">
            </div>

            <div class="form-group">
                <label for="vip_row">VIP Rows:</label>
                <input type="number" name="vip_row" id="vip_row" value="<?php echo htmlspecialchars($edit_vip_row); ?>">
            </div>

            <div class="form-group">
                <label for="n_column">Columns:</label>
                <input type="number" name="n_column" id="n_column" value="<?php echo htmlspecialchars($edit_n_column); ?>">
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" value="<?php echo htmlspecialchars($edit_date); ?>">
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" id="time" value="<?php echo htmlspecialchars($edit_time); ?>">
            </div>

            <div class="form-group">
                <button type="submit" name="update_showtime">Update Showtime</button>
                <button type="button" onclick="hideEditPopup()">Cancel</button>
            </div>
    </div>
    </div>
<?php endif; ?>


<script>
    function showEditPopup(id) {
        document.getElementById('editFormContainer').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function hideEditPopup() {
        document.getElementById('editFormContainer').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
</script>