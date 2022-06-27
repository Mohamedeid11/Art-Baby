<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Automatic Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="telephone=no" name="format-detection">
    <meta content=
          "width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;"
          name="viewport">
    <style>
        .main-table td, .main-table th {
            text-align: center;
            padding: 5px;
            border-top: 1px solid #333;
            margin: 0 -1px;
        }

        .main-table tr {
            border: 1px solid #333;
        }
    </style>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#FFFFFF">
<table align="center" cellpadding="0" cellspacing="0" width="95%%" style="padding:15px;">
    <tr>
        <td align="center">
            <table align="center" border="1" cellpadding="0" cellspacing="0" width="600px" style="margin:15px;padding:15px;border-collapse: separate; border-spacing: 5px 5px; #000;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" style="padding:5px;">
                        <a href="http://freshfeelsbh.com/" target="_blank">
                            <img src="http://freshfeelsbh.com/uploads/fresh-feels.jpeg" alt="Logo" style="width:186px;border:0;"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding:30px 0;">
                        <table class="main-table">
                            <tr>
                                <th colspan="10">Subscription Details</th>
                            </tr>
                            <tr>
                                <th colspan="2">Title</th>
                                <th colspan="2">Features</th>
                                <th colspan="2">Type</th>
                                <th colspan="2">Meals Count</th>
                                <th colspan="2">Days Count</th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ $subscription->plan['title_en'] }}</td>
                                <td colspan="2">
                                    <ul class="p-0">
                                        @foreach($subscription->plan['feature_en'] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td colspan="2">{{ $subscription->plan['type'] }}</td>
                                <td colspan="2">{{ $subscription->plan['meals_count'] }}</td>
                                <td colspan="2">{{ $subscription->plan['days_count'] }}</td>
                            </tr>
                            <tr>
                                <th colspan="10">Client Info</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Region</th>
                                <th>Block</th>
                                <th>Road</th>
                                <th>Building</th>
                                <th>Flat No</th>
                                <th>Type</th>
                                <th colspan="2">Additional Directions</th>
                            </tr>
                            <tr>
                                <td>{{ $subscription->client['name'] }}</td>
                                <td>{{ $subscription->address['phone'] }}</td>
                                <td>{{ $subscription->address->region['name_en'] }}</td>
                                <td>{{ $subscription->address['block'] }}</td>
                                <td>{{ $subscription->address['road'] }}</td>
                                <td>{{ $subscription->address['floor_no'] }}</td>
                                <td>{{ $subscription->address['apartment'] }}</td>
                                <td>{{ $subscription->address['type'] }}</td>
                                <td colspan="2">{{ $subscription->address['additional_directions'] }}</td>
                            </tr>
                            <tr>
                                <th colspan="10">Subscription Info</th>
                            </tr>
                            <tr>
                                <th colspan="2">Payment Method</th>
                                <th colspan="2">Sub Total</th>
                                <th>VAT</th>
                                <th>Discount</th>
                                <th colspan="2">Delivery Cost</th>
                                <th colspan="2">Net Total</th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ $subscription->payment['name_en'] }}</td>
                                <td colspan="2">{{ $subscription['sub_total'] }} BHD</td>
                                <td>{{ $subscription['VAT'] }} BHD</td>
                                <td>{{ $subscription['discount'] }} BHD</td>
                                <td colspan="2">{{ $subscription['delivery_charge'] }} BHD</td>
                                <td colspan="2">{{ $subscription['net_total'] }} BHD</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">
                        <table cellpadding="0" cellspacing="0" width="100%" style="padding:10px;">
                            <tr>
                                <td width="260" valign="top" style="padding: 0 0 15px 0;">
                                    <table cellpadding="0" cellspacing="0" width="100%%">
                                        <tr>
                                            <td align="center">
                                                <a href="tel:{{ setting('phone') }}" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/phone-icon.jpeg" alt="اتصل بنا"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                اتصل بنا
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                                <td width="260" valign="top">
                                    <table cellpadding="0" cellspacing="0" width="100%%" >
                                        <tr>
                                            <td align="center">
                                                <a href="mailto:{{ setting('email') }}">
                                                    <img src="http://comm.emcan-group.com/uploads/email-icon.jpeg" alt="Email us"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                راسنا على البريد الإلكتروني
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF" style="padding: 15px 15px 15px 15px;">
                        <table cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td align="center">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <a href="#" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/facebook-icon.jpeg" alt="Facebook" width="50" height="50" style="display: block;"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="#" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/instagram-icon.jpeg" alt="Instagram" width="50" height="50"style="display: block;"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="#" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/twitter-icon.jpeg" alt="Twitter" width="50" height="50"style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
