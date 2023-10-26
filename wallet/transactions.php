<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockchain Transaction</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css">

</head>
<body>
    <div class="container mt-5">
        <form id="transactionForm">
            <div class="form-group">
                <label for="senderAddress">Sender Address:</label>
                <input type="text" class="form-control" id="senderAddress" name="senderAddress">
            </div>
            <div class="form-group">
                <label for="publicKey">Public Key:</label>
                <input type="text" class="form-control" id="publicKey" name="publicKey">
            </div>
            <div class="form-group">
                <label for="privateKey">Private Key:</label>
                <input type="text" class="form-control" id="privateKey" name="privateKey">
            </div>
            <div class="form-group">
                <label for="recipientAddress">Recipient Address:</label>
                <input type="text" class="form-control" id="recipientAddress" name="recipientAddress">
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount">
            </div>
            <button type="button" class="btn btn-primary" id="submitBtn">Send Transaction</button>
        </form>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var submitBtn = document.getElementById("submitBtn");

            submitBtn.addEventListener("click", async function () {
                var senderAddress = document.getElementById("senderAddress").value;
                var publicKey = document.getElementById("publicKey").value;
                var privateKey = document.getElementById("privateKey").value;
                var recipientAddress = document.getElementById("recipientAddress").value;
                var amount = document.getElementById("amount").value;

                var data = {
                    senderAddress: senderAddress,
                    publicKey: publicKey,
                    privateKey: privateKey,
                    recipientAddress: recipientAddress,
                    amount: amount
                };

                try {
                    const response = await fetch('/api/transactions.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                    });

                    if (response.status === 200) {
                        const jsonData = await response.json();
                        Swal.fire('Success', jsonData.message, 'success');
                    } else {
                        Swal.fire('Error', 'An error occurred', 'error');
                    }
                } catch (error) {
                    Swal.fire('Error', 'An error occurred: ' + error, 'error');
                }
            });
        });
    </script>
</body>
</html>
