@component('mail::message')
    <p style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        Hi,<br />
        New enquiry has been initiated on Nextus Global Services
        <br />
        Following are the contact enquiry details.
    </p>
    <table style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        <tbody>
            @if (isset($data['full_name']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Full Name</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['full_name'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['email']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Email-Id</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['email'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['subject']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Subject</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['subject'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['mobile']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Mobile Number</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['mobile'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['function']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Function</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['function'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['location']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Location</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['location'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['portfolio_link']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;">
                        <b>Portfolio-Link</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['portfolio_link'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['upload_resume']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;">
                        <b>Download Resume</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;">
                        <b>
                            &nbsp;&nbsp;
                            <a href="{{ asset('storage/' . $data['upload_resume']) }}" target="_blank"
                                style="color: #007bff; text-decoration: none;">
                                View Resume
                            </a>
                        </b>
                    </td>
                </tr>
            @endif
            @if (isset($data['upload_portfolio']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;">
                        <b>Download Portfolio</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;">
                        <b>
                            &nbsp;&nbsp;
                            <a href="{{ asset('storage/' . $data['upload_portfolio']) }}" target="_blank"
                                style="color: #28a745; text-decoration: none;">
                                View Portfolio
                            </a>
                        </b>
                    </td>
                </tr>
            @endif
            @if (isset($data['message']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Message</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['message'] !!}</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    <br />
    <br /><br />
    Thanks,<br>
    Sales Team,<br />
    Nextus Global Services<br />
@endcomponent
