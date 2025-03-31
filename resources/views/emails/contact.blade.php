<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Header Section */
        .email-header {
            background-color: #ef4444;
            /* Match your site's accent color */
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        /* Content */
        .email-content {
            padding: 20px;
            color: #333;
        }

        .email-content p {
            color: #555;
            line-height: 1.6;
            margin: 8px 0;
        }

        .email-content strong {
            color: #333;
        }

        /* Footer */
        .email-footer {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
            color: #888;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .email-container {
                margin: 20px;
                padding: 15px;
            }

            .email-header {
                font-size: 20px;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            New Contact Form Submission
        </div>

        <!-- Content -->
        <div class="email-content">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $userMessage }}</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            This message was sent from your contact form.
        </div>
    </div>
</body>

</html>
