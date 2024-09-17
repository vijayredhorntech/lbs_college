<?php

namespace App\Http\Controllers;

class PageController extends Controller
{




    public function committee($type){
        if ($type === 'ICC') {
            $title = 'Internal Complaints Committee';
            $tableHeader = ['Name', 'Phone'];
            $tableData = [
                ['Dr Poonam Mehta', '9816048658'],
                ['Dr Yogita Bandta', '9816025354'],
                ['Prof Vijay Luxmi', '9805205680'],
                ['Dr Rohit Mokta', '9418072446'],
                ['Dr Punam Chauhan', '9805783410'],
                ['Advocate Yashwant Pirta', '9816147259'],
            ];
        }
        if ($type === 'Women-Redressal') {
            $title = 'Women Redressal Cum Sexual Harassment Committee';
            $tableHeader = ['Name', 'Phone'];
            $tableData = [
                ['Dr. Lalita Rawat Convenor', '8628076759'],
                ['Dr. Punam Mehta', '9816048658'],
                ['Prof. Preeti Panta Chhatti', '9418209261'],
                ['Dr. Shallu Dogra Sharma ', '9023444321'],
                ['Smt. Nirdosh Pathania ', '7018889144'],
                ['Smt. Roshani Chauhan', '9418057275'],
                ['Smt. Sharda Devi', ''],
            ];
        }
        if ($type === 'Students-Complaint') {
            $title = 'Students’ Complaint Committee';
            $tableHeader = ['Name', 'Phone'];
            $tableData = [
                ['Dr. Lalita Rawat Convenor', '8628076759'],
                ['Dr. Punam Mehta', '9816048658'],
                ['Prof. Chander Sen Chauhan', '9805574091'],
                ['Prof. Rajinder Singh ', '9459608158'],
                ['Prof. Goverdhan Kumar Chauhan', '9736172367'],
                ['Sh. Govind Singh ', '8278841033'],
            ];
        }
        return view('Administration.committee', compact('title', 'tableHeader','tableData'));
    }

    public function academics( $type)
    {
        if ($type === 'SYLLABUS') {
            $title = 'SYLLABUS';
            $tableHeader = ['	Syllabus', 'Course'];
            $folderName = 'academic';

            $tableData = [
                ['	Bachelor of Computer Application (BCA)', 'UG',  'BCA'],
                ['	Bachelor of Commerce ( BCom)', 'UG',  'BCOM ANNUAL'],
                ['Botany Annual Pattern', 'UG',  'BOTANY ANNUAL'],
                ['Chemistry Annual Pattern', 'UG',  'CHEMISTRY ANNUAL'],
                ['Mathematics Annual Pattern', 'UG',  'Mathematics Annual'],
                ['	Physics Annual Pattern', 'UG',  'PHYSICS ANNUAL'],
                ['Zoology Annual Pattern', 'UG',  'ZOOLOGY ANNUAL'],
                ['English syllabus Annual Pattern', 'UG',  'ENGLISH ANNUAL'],
                ['Hindi syllabus Annual Pattern', 'UG',  'HINDI ANNUAL'],
                ['Sanskrit syllabus Annual Pattern', 'UG',  '#',],
                ['Economics syllabus Annual Pattern', 'UG',  '#',],
                ['History syllabus Annual Pattern', 'UG',  'HISTORY ANNUAL'],
                ['Political Science syllabus Annual Pattern', 'UG',  'POLITICAL SCIENCE ANNUAL'],
                ['Public Administration syllabus Annual Pattern', 'UG',  'PUB. AD. ANNUAL'],
                ['	Philosophy Science syllabus Annual Pattern', 'UG',  'PHILOSOPHY ANNUAL'],
                ['Music (V & I) syllabus Annual Pattern', 'UG',  'MUSIC ANNUAL'],
                ['	Physical Education syllabus Annual Pattern', 'UG',  'PHYSICAL EDUCATION ANNUAL'],
                ['Geography syllabus Annual Pattern', 'UG',  'GEOGRAPHY ANNUAL'],

            ];
        }
        if ($type === 'ACADEMIC-CALENDER') {
            $title = 'ACADEMIC CALENDER';
            $tableHeader = ['Academic Calender', 'Year'];
            $folderName = 'academic';
            $tableData = [
                ['Academic Calender', '2024-2025',  'Academic-Calender-24-25'],
                ['Academic Calender', '2023-2024',  'Academic-Calender23-24'],
                ['Academic Calender', '2022-2023',  'Academic Calender 22-23'],
                ['Academic Calender', '2021-2022',  'Academic Calender 21-22'],
                ['Academic Calender', '2020-2021',  'Academic Calender 2020-21'],
                ['Academic Calender', '2019-2020',  'Academic Calender 2019-20'],
            ];
        }


        return view('academics', compact('title', 'tableHeader', 'tableData', 'type', 'folderName'));
    }

    public function activities( $type)
    {
        if ($type === 'NSS') {
            $title = 'NSS';
            $tableHeader = ['NSS', 'Year'];
            $folderName = 'activities';
            $tableData = [
                ['Report', '2021-2022',  'NSS Annual  report 2021-22'],
                ['Report', '2020-2021',  'NSS annual report 2020-21'],
                ['Report', '2019-2020',  'NSS Report 2019-20'],
            ];
        }
        if ($type === 'NCC') {
            $title = 'NCC';
            $tableHeader = ['NCC', 'Year'];
            $folderName = 'activities';
            $tableData = [
                ['Report', '2021-2022',  '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2019-2020', '#',],
            ];
        }
        if ($type === 'ROVERS-RANGERS') {
            $title = 'ROVERS & RANGERS';
            $folderName = 'activities';
            $tableHeader = ['Rovers & Rangers Activity Report', 'Year'];
            $tableData = [
                ['Rovers & Rangers Activity Reports 2', '2021-2022',  '#',],
                ['Rovers & Rangers Activity Reports 1', '2019-2020',  '#',],
            ];
        }
        if ($type === 'ECO-CLUB') {
            $title = 'ECO CLUB';
            $folderName = 'activities';
            $tableHeader = ['ECO CLUB', 'Year'];
            $tableData = [
                ['Report', '2021-2022',  '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2019-2020',  '#',],
            ];
        }
        if ($type === 'RED-RIBBON-CLUB') {
            $title = 'RED RIBBON ANNUAL REPORTS';
            $folderName = 'activities';
            $tableHeader = ['Annual Report', 'Year'];
            $tableData = [
                ['RRC report ', '2021-2022',  '#',],
                ['RRC report ', '2020-2021',  '#',],
                ['RRC report ', '2019-2020',  'Red Ribbon Club 2019-20'],
                ['RRC report ', '2018-2019',  '#',],
                ['RRC report ', '2017-2018',  '#',],
            ];
        }
        if ($type === 'REGULAR-ACTIVITIES') {
            $title = 'REGULAR ACTIVITIES';
            $folderName = 'activities';
            $tableHeader = ['Regular Activities', 'Year'];
            $tableData = [
                ['	Regular Activities Reports 2', '2021-2022',  '#',],
                ['	Regular Activities Reports 1', '2021-2022',  '#',],

            ];
        }
        if ($type === 'ACADEMIC-ACTIVITIES') {
            $title = 'ACADEMIC ACTIVITIES';
            $folderName = 'activities';
            $tableHeader = ['	Academic Activities', 'Year'];
            $tableData = [
                ['	Academic Activities Report', '2022-23',  'ACADEMIC COMMITTEE REPORTS 22-23'],
                ['	Academic Activities Report', '2021-22',  'ACADEMIC COMMITTEE REPORT 2021-22'],
                ['	Academic Activities Report', '2020-201',  '#',],
                ['	Academic Activities Report', '2019-20',  '#',],
            ];
        }
        if ($type === 'EXPERIENTIAL-LEARNING') {
            $title = 'EXPERIENTIAL LEARNING';
            $folderName = 'activities';
            $tableHeader = ['	Experiential Learning Report', 'Year'];
            $tableData = [
                ['Experiential Learning Report', '2022-23',  'EXPERIENTIAL LEARNING 2022-23'],
            ];
        }
        if ($type === 'CONFERENCES-SEMINARS-WORKSHOPS') {
            $title = 'CONFERENCES REPORTS';
            $folderName = 'activities';
            $tableHeader = ['Conferences Report', 'Year'];
            $tableData = [
                ['  IQAC FDP Report 23-24', '',  'IQAC-FDP REPORT23-24'],
                ['  Anti Drugs Report 23-24', '',  'ANTI-DRUGS REPORT23-24'],
                ['	IQAC Webinar', '',  'IQAC webinar'],
                ['	International Conference', '',  'International Conference'],
                ['	COVID webinar', '',  'COVID webinar'],
                ['	National webinar Report', '',  'NATIONAL WEBINAR JUNE 21 REPORT'],
                ['	National workshop Report', '',  'NATIONAL WORKSHOP NOV 21 REPORT'],
                ['	CAREER COUNSELLING WEBINAR Report', '',  'CAREER COUNSELLING WEBINAR MAY 22 REPORT'],
                ['  Chemistry Two Days Workshop Report', '',  'REPORT EXPERIENTIAL CHEMISTRY WORKSHOP 22-23'],
                ['	Science One Day Workshop Report', '', '#',],

            ];
        }
        if ($type === 'WOMEN-GRIEVANCE-REDRESSAL-CELL') {
            $title = 'WOMEN GRIEVANCE REDRESSAL CELL';
            $tableHeader = [];
            $tableData = [];
        }
        return view('activities', compact('title', 'tableHeader', 'tableData', 'type', 'folderName'));
    }

    public function report( $type)
    {
        if ($type === 'COLLEGE-ANNUAL-REPORTS') {
            $title = 'ANNUAL REPORTS';
            $tableHeader = ['Annual Report', 'Year'];
            $folderName = 'annualReport';

            $tableData = [
                ['	Annual report', '2022-23',  'Annual Report 2022-23'],
                ['	Annual report', '2021-22',  'Annual Report 2021-22'],
                ['	Annual report', '2020-21',  'ANNUAL REPORT 2020-21'],
                ['	Annual report', '2019-20',  'Annual  Report  2019-20'],
                ['	Annual report', '2018-19',  'Annual Report 2018-19'],
                ['	Annual report', '2017-18',  'Annual  Report  2017-18'],
                ['	Annual report', '2016-17',  'Annual Report 2016-17'],
            ];
        }
        elseif($type ==='STUDENTS-SATISFACTION-SURVEY'){
            $title = 'STUDENTS SATISFACTION SURVEY';
            $tableHeader = ['	Students Satisfaction Survey', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['	Students Satisfaction Survey Report', '2022-23',  'Student Satisfaction Survey(2022-23)'],
                ['	Students Satisfaction Survey Report', '2021-22',  'Student Satisfaction Survey (2021-2022)'],
                ['	Students Satisfaction Survey Report', '2020-21',  'Students Satisfaction Survey'],
                ['	Students Satisfaction Survey Report', '2019-20',  'Student Satisfaction Survey(2022-23)'],


            ];
        }
        elseif($type ==='STUDENTS-FEEDBACK-SURVEY'){
            $title = 'STUDENTS FEEDBACK';
            $tableHeader = ['Students Feedback', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['Students Feedback_2023_24_Report', 'Yearly Status Report - 2023-24',  'STUDENTS FEEDBACK 23-24'],
                ['Students Feedback_2022_23_Report', 'Yearly Status Report - 2022-23',  'Students Feedback 22-23'],
                ['Students Feedback_2021_22_Report', 'Yearly Status Report - 2021-22',  'Student Feedback 21-22'],
                ['Students Feedback_2020_21_Report', 'Yearly Status Report - 2020-21',  'Students feedback 2020-21'],
                ['Students Feedback_2019_20_Report', 'Yearly Status Report - 2019-20',  'Students Feedback 2019-20'],


            ];
        }
        elseif($type ==='TEACHERS-FEEDBACK-SURVEY'){
            $title = 'TEACHERS FEEDBACK SURVEY';
            $tableHeader = ['Teachers Feedback Survey', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['	Teachers Feedback_2023_24_Survey Report', 'Yearly Status Report - 2023-24',  'TEACHERS FEEDBACK 23-24'],
                ['	Teachers Feedback_2022_23_Survey Report', 'Yearly Status Report - 2022-23',  'Teachers Feedback 22-23'],
                ['	Teachers Feedback_2021_22_Survey Report', 'Yearly Status Report - 2021-22',  'Teacher Feedback 21-22'],
                ['	Teachers Feedback_2020_21_Survey Report', 'Yearly Status Report - 2020-21',  'Teachers Feedback 2020-21'],
                ['	Teachers Feedback_2019_20_Survey Report', 'Yearly Status Report - 2019-20',  'Teachers Feedback 2019-20'],


            ];
        }

        return view('reports', compact('title', 'tableHeader', 'tableData' , 'folderName'))->with('type', $type);
    }

    public function naac( $type)
    {
        $folderName = '';
        if ($type === 'NAAC-REPORTS') {
            $title = 'NAAC REPORTS';
            $tableHeader = ['NAAC Reports', 'Year'];
            $folderName = 'naac';
            $tableData = [
                ['SSR Report', '2017-2022',  'SSR  2017-22',],
                ['SSR Report', '2012-2017',  'College SSR',],
            ];
        }


        elseif ($type === 'COLLEGE-AQAR') {
            $title = 'THE ANNUAL QUALITY ASSURANCE REPORT (AQAR)';
            $tableHeader = ['The Annual Quality Assurance Report', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['NAAC AQAR Report', 'Yearly Status Report - 2021-22',  'AQAR 2021-22'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2020-2021',  'AQAR 2020-21'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2019-2020',  'naac_2019_20_aqar_report'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2018-2019',  'naac_2018_19_aqar_report'],
                ['NAAC AQAR Report', 'Yearly status report 2017-2018',  'aqar'],
                ['NAAC AQAR Report', 'Yearly status report 2016-17',  'Aqar Report  2016-17'],
            ];
        }
        elseif ($type === 'college-aqar-data') {
            $title = 'COLLEGE AQAR DATA';
            $tableHeader = [];
            $tableData = [];
        }
        elseif ($type === 'college-ssr') {
            $title = 'NAAC SSR REPORTS';
            $tableHeader = [];
            $tableData = [];
        }
        elseif ($type === 'BEST-PRACTICES') {
            $title = 'BEST PRACTICES';
            $tableHeader = ['	Best Practices', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Best Practices', '2022-23',  '7.2.1 Best Practices Report (2022-23)'],
                ['Best Practices', '2021-22',  '7.2.1 Best Practices'],
            ];
        }
        elseif ($type === 'COMPOSITION') {
            $title = 'COMPOSITION';
            $tableHeader = ['Composition', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Composition', '2022-23',  'IQAC 2022'],
                ['Composition', '2021-22',  'IQAC 2021-22'],
                ['Composition', '2020-21',  'IQAC 2020-21'],
                ['Composition', '2019-20',  'IQAC 2019-20'],
            ];
        }
        elseif ($type === 'MEETINGS') {
            $title = 'MEETINGS';
            $tableHeader = ['Meetings', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Meetings', '2022-23',  'IQAC MEETINGS 2022-23'],
                ['Meetings', '2021-22',  'IQAC MEETINGS 21-22'],
                ['Meetings', '2020-21',  'IQAC Meeting 2020-21'],
                ['Meetings', '2019-20',  'IQAC Meetings 2019-20'],
                ['Meetings', '2018-19',  'IQAC Meeting  2018-19'],
                ['Meetings', '2017-18',  'IQAC_Meetings 2017-18'],
            ];
        }
        elseif ($type === 'MEETINGS-OUTCOMES') {
            $title = 'MEETING OUTCOME';
            $tableHeader = ['IQAC Meeting Outcome', 'Year'];
            $folderName = 'naac';
            $tableData = [
                ['Outcome', '2022-23',  'OUTCOME REPORT 22-23'],
                ['Outcome', '2021-22',  'Outcome Report  2021-22'],
                ['Outcome', '2020-21',  'OUTCOMES 2020-21'],
                ['Outcome', '2019-20',  'OUTCOMES 2019-20'],
            ];
        }
        elseif ($type === 'ACTION-TAKEN-REPORT') {
            $title = 'IQAC ACTION TAKEN REPORT';
            $tableHeader = ['Report', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['	Action taken report', '2022-23',  'IQAC ACTION TAKEN REPOER 2022-23'],
                ['	Action taken report', '2021-22',  'ACTION TAKEN REPORT 21-22'],
            ];
        }
        if ($type === 'institutional-distinctiveness') {
            $title = 'INSTITUTIONAL DISTINCTIVENESS';
            $tableHeader = [];
            $tableData = [];
        }
        return view('naac', compact('title', 'type', 'tableHeader', 'tableData'), compact('folderName'));
    }

    public function pdfViewer($folder,$file)
    {


        $filePath = asset('assets/pdf/'.$folder.'/'.$file.'.pdf');


        return view('pdfViewer',)->with('filePath', $filePath);
    }

    public function alumni( $type)
    {
        $folderName = '';
        if ($type === 'ALUMNI-CHARTER') {
            $title = 'ALUMNI CHARTER';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'registration') {
            $title = 'REGISTRATION';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'OUR-ALUMNI') {
            $title = 'OUR ALUMNI';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'ALUMNI-FEEDBACK') {
            $title = 'ALUMNI FEEDBACK';
            $folderName = 'alumni';
            $tableHeader = [ 'Alumni Feedback', 'Year'];
            $tableData = [
                ['Alumni Feedback_2023-24_Report', 'Yearly Status Report - 2023-24','ALUMNI FEEDBACK 23-24'],
                ['Alumni Feedback_2022-23_Report', 'Yearly Status Report - 2022-23','Alumni Feedback 22-23'],
                ['Alumni Feedback_2021-22_Report', 'Yearly Status Report - 2021-22','Alumni Feedback 21-22'],
                ['Alumni Feedback_2020-21_Report', 'Yearly Status Report - 2020-21','Alumni feedback 2020-21'],
                ['Alumni Feedback_2019_20_Report', 'Yearly Status Report - 2019-20','https://www.lbsgcsnagar.edu.in/pdf/Alumni%20Feedback.pdf'],
            ];
        }


        return view('alumni', compact('title', 'type', 'tableHeader', 'tableData', 'folderName'));
    }


}
