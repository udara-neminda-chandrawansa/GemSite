<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #4a124d;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        .summary {
            margin-top: 20px;
        }

        .summary p {
            margin: 5px 0;
        }

        .footer {
            padding: 20px;
            text-align: center;
            background-color: #f4f4f4;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>New Booking: #20526</h1>
        </div>
        <!-- Content -->
        <div class="content">
            <!-- <p>
          You’ve received the following order from <strong>Saman Vidya</strong>:
        </p> -->
            <h3>[Booking #20526] (January 6, 2025)</h3>
            <!-- Product Table -->
            <table>
                <thead>
                    <tr>
                        <th>Packages Name</th>
                        <th>Chek In</th>
                        <th>Chek Out</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>Package 1</strong><br />

                        
                        </td>
                        <td>  2025/01/10</td>
                        <td>  2025/02/10</td>
                        <td>$250</td>
                    </tr>
                </tbody>
            </table>
            <!-- Summary -->
            <div class="summary">
                <p><strong>Full Name:</strong> Kasun kalhara</p>
                <p><strong>Email:</strong> sample@gmail.com</p>
                <p><strong>Phone Number:</strong> +78 XX XXX XXXX</p>
            </div>
            <!-- Billing Address -->
            <div class="billing-address">
                <h3>Additional Note</h3>
                <p>
                    .........
                </p>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <!-- <p>Thank you for your booking!</p> -->
            <p>New booking details!</p>
        </div>
    </div>
</body>

</html>