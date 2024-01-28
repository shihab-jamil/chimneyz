<!DOCTYPE html>
<html>
<head>
    <title>New Schedule Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .body-content {
            padding: 20px;
            line-height: 1.6;
            border-top: 1px solid #ddd;
        }
        .footer {
            background-color: #f8f8f8;
            text-align: center;
            padding: 15px 20px;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #ddd;
        }
        .footer p {
            margin: 0;
        }
        .important-info {
            background-color: #e8f5e9;
            padding: 15px;
            margin: 20px 0;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <h1>New Schedule Confirmation</h1>
    </div>
    <div class="body-content">
        <h2>Hello Team,</h2>
        <p>A new service schedule has been confirmed. Here are the details:</p>

        <div class="important-info">
            <p><strong>Service Type:</strong> {{ $info->service_type }}</p>
            <p><strong>Quantity:</strong> {{ $info->service_quantity }}</p>
            <p><strong>Location:</strong> {{ $info->location }}</p>
            <p><strong>Schedule Made at :</strong> {{ \Carbon\Carbon::parse($info->created_at)->format('jS F, Y') }}</p>
            <p><strong>Total Cost:</strong> {{ $info->service_cost }}</p>
        </div>

        <p><strong>Contact Information:</strong></p>
        <p>Name: {{ $info->name }}</p>
        <p>Email: {{ $info->email }}</p>
        <p>Phone: {{ $info->phone_number }}</p>
        <p>Address: {{ $info->address }}</p>

        <p><strong>Additional Message:</strong> {{ $info->message }}</p>

        <p>Best Regards,</p>
        <p>Chimneyz</p>
    </div>
    <div class="footer">
        <p>This is an automated message. Please do not reply directly to this email.</p>
    </div>
</div>
</body>
</html>
