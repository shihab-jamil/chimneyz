<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body style="margin: 0; padding: 0; background-color: #F2F2F2; font-family: Arial, sans-serif;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
       style="border-collapse: collapse; background-color: #FFFFFF; border: 1px solid #DDDDDD; margin-top: 30px;">
    <!-- Header -->
    <tr>
        <td align="center" style="background-color: #005A9C; padding: 20px;">
            <h1 style="color: #FFFFFF; margin: 0;">New Contact Request</h1>
        </td>
    </tr>

    <!-- Body -->
    <tr>
        <td style="padding: 30px; background-color: #FFFFFF;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="color: #333333; font-size: 18px; line-height: 24px;">
                        <p style="margin: 0;"><strong>Dear Team,</strong></p>
                        <p style="margin-top: 20px;">A new contact request has been submitted through our website. Below
                            are the details:</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 0;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                               style="border-collapse: separate; border-spacing: 10px 5px;">
                            <tr>
                                <td style="background-color: #F9F9F9; padding: 15px; border: 1px solid #E8E8E8;">
                                    <strong>Name:</strong> {{ $info['name'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #F9F9F9; padding: 15px; border: 1px solid #E8E8E8;">
                                    <strong>Email:</strong> <a href="mailto:{{ $info['email'] }}"
                                                               style="color: #005A9C; text-decoration: none;">{{ $info['email'] }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #F9F9F9; padding: 15px; border: 1px solid #E8E8E8;">
                                    <strong>Phone:</strong> {{ $info['phoneNumber'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #F9F9F9; padding: 15px; border: 1px solid #E8E8E8;">
                                    <strong>Phone:</strong> {{ $info['address'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #F9F9F9; padding: 15px; border: 1px solid #E8E8E8;">
                                    <strong>Message:</strong><br>{{ $info['message'] }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color: #333333; font-size: 16px; line-height: 24px; margin: 0;">
                            Please ensure that this inquiry is addressed promptly.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td align="center" style="background-color: #333333; padding: 20px; color: #FFFFFF; font-size: 14px;">
            This message is automatically generated by Chimneyz's Contact Form.<br>
            <a href="mailto:usachimneyz@gmail.com" style="color: #FFFFFF; text-decoration: underline;">Contact
                Support</a>
        </td>
    </tr>
</table>
</body>
</html>