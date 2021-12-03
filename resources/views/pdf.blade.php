<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>


    <style>
        table,
        th,
        td {
            border: 1px solid rgb(184, 184, 184);
            border-collapse: collapse;
        }

        td {
            padding: 5px
        }

        .td-heading {
            width: 150px;
            text-align: left;
            background: #e9e7e7
        }

        .school h2 {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 50px;
        }

    </style>
</head>



<body>
    <div class="school">
        <h2>
            Bishnopur High School
        </h2>
    </div>
    <table style="width:100%">
        <tr>
            <td class="td-heading">User ID</td>
            <td>{{ $data['uuid'] }}</td>
            <td class="td-heading">Class</td>
            <td>6</td>
        </tr>
        <tr>
            <td class="td-heading">Applied On</td>
            <td>{{ \Carbon\Carbon::parse($data['created_at'])->format('d-m-Y H:i:s') }}</td>
            <td class="td-heading">Transcation ID</td>
            <td>{{ $data['transaction_id'] }} </td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width:100%">

        <tr>
            <td class="td-heading">Name</td>
            <td colspan="4"> {{ $data['name'] }}</td>
            <td style="width: 100px" rowspan="3">
                <img width="100" height="100px" src="/images/students/{{ $data['image'] }}" alt="">
            </td>
        </tr>
        <tr>
            <td class="td-heading">Father Name</td>
            <td>{{ $data['father_name'] }}</td>
            <td class="td-heading">NID</td>
            <td colspan="2">{{ $data['father_nid_no'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Mother Name</td>
            <td>{{ $data['mother_name'] }}</td>
            <td class="td-heading">NID</td>
            <td colspan="2">{{ $data['mother_nid_no'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Date Of Birth</td>
            <td>{{ $data['birth_date'] }}</td>
            <td class="td-heading">Birth Reg.</td>
            <td colspan="3">{{ $data['birth_certificate_no'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Gender</td>
            <td colspan="5">{{ $data['gender'] }}</td>

        </tr>
        <tr>
            <td class="td-heading">Guard. Name</td>
            <td>{{ $data['guardian_name'] }}</td>
            <td class="td-heading">NID</td>
            <td colspan="3">{{ $data['guardian_nid_no'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Prev. School</td>
            <td colspan="5">{{ $data['prev_school'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Prev. Class</td>
            <td colspan="5">{{ $data['prev_class'] }}</td>
        </tr>
        <tr>
            <td class="td-heading">Present Address</td>
            <td colspan="5">
                <div> <strong>Details:</strong> {{ $data['present_address'] }}</div>
                <div>
                    <strong>Thana:</strong> {{ $data['present_thana'] }},
                    <strong>District:</strong> {{ $data['present_district'] }},
                    <strong>Division:</strong> {{ $data['present_devision'] }},
                    <strong>Post Code :</strong> {{ $data['present_post_code'] }},
                </div>

            </td>
        </tr>
        <tr>
            <td class="td-heading">Permanent Address</td>
            <td colspan="5">
                <div> <strong>Details:</strong> {{ $data['permanent_address'] }}</div>
                <div>
                    <strong>Thana:</strong> {{ $data['permanent_thana'] }},
                    <strong>District:</strong> {{ $data['permanent_district'] }},
                    <strong>Division:</strong> {{ $data['permanent_devision'] }},
                    <strong>Post Code :</strong> {{ $data['permanent_post_code'] }},
                </div>

            </td>
        </tr>
    </table>
</body>

</html>
