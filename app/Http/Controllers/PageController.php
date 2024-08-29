<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function naac( $type)
    {
        if ($type === 'NAAC-REPORTS') {
            $title = 'NAAC REPORTS';
            $tableHeader = ['NAAC Reports', 'Year'];
            $tableData = [
                ['SSR Report', '2012-2017',  asset('assets/pdf/naac/College SSR.pdf'),],
                ['SSR Report', '2017-2022',  asset('assets/pdf/naac/SSR  2017-22.pdf'),],
                ];
        }
        elseif ($type === 'COLLEGE-AQAR') {
            $title = 'THE ANNUAL QUALITY ASSURANCE REPORT (AQAR)';
            $tableHeader = ['The Annual Quality Assurance Report', 'Year'];
            $tableData = [
                ['NAAC AQAR Report', 'Yearly Status Report - 2021-22',  asset('assets/pdf/naac/AQAR 2021-22.pdf'),],
                ['NAAC AQAR Report', 'Yearly Status Report - 2020-2021',  asset('assets/pdf/naac/AQAR 2020-21.pdf'),],
                ['NAAC AQAR Report', 'Yearly Status Report - 2019-2020',  asset('assets/pdf/naac/naac_2019_20_aqar_report.pdf'),],
                ['NAAC AQAR Report', 'Yearly Status Report - 2018-2019',  asset('assets/pdf/naac/naac_2018_19_aqar_report.pdf'),],
                ['NAAC AQAR Report', 'Yearly status report 2017-2018',  asset('assets/pdf/naac/aqar.pdf'),],
                ['NAAC AQAR Report', 'Yearly status report 2016-17',  asset('assets/pdf/naac/Aqar Report  2016-17.pdf'),],
                ];
        }
        elseif ($type === 'BEST-PRACTICES') {
            $title = 'BEST PRACTICES';
            $tableHeader = ['	Best Practices', 'Year'];
            $tableData = [
                ['Best Practices', '2021-22',  asset('assets/pdf/naac/7.2.1 Best Practices.pdf'),],
                ['Best Practices', '2022-23',  asset('assets/pdf/naac/7.2.1 Best Practices Report (2022-23).pdf'),],
                ];
        }
        elseif ($type === 'COMPOSITION') {
            $title = 'COMPOSITION';
            $tableHeader = ['Composition', 'Year'];
            $tableData = [
                ['Composition', '2019-20',  asset('assets/pdf/naac/IQAC 2019-20.pdf'),],
                ['Composition', '2020-21',  asset('assets/pdf/naac/IQAC 2020-21.pdf'),],
                ['Composition', '2021-22',  asset('assets/pdf/naac/IQAC 2021-22.pdf'),],
                ['Composition', '2022-23',  asset('assets/pdf/naac/IQAC 2022.pdf'),],
                ];
        }
        elseif ($type === 'MEETINGS') {
            $title = 'MEETINGS';
            $tableHeader = ['Meetings', 'Year'];
            $tableData = [
                ['Meetings', '2017-18',  asset('assets/pdf/naac/IQAC_Meetings 2017-18.pdf'),],
                ['Meetings', '2018-19',  asset('assets/pdf/naac/IQAC Meeting  2018-19.pdf'),],
                ['Meetings', '2019-20',  asset('assets/pdf/naac/IQAC Meetings 2019-20.pdf'),],
                ['Meetings', '2020-21',  asset('assets/pdf/naac/IQAC Meeting 2020-21.pdf'),],
                ['Meetings', '2021-22',  asset('assets/pdf/naac/IQAC MEETINGS 21-22.pdf'),],
                ['Meetings', '2022-23',  asset('assets/pdf/naac/IQAC MEETINGS 2022-23.pdf'),],
                ];
        }
        elseif ($type === 'MEETINGS-OUTCOMES') {
            $title = 'MEETING OUTCOME';
            $tableHeader = ['IQAC Meeting Outcome', 'Year'];
            $tableData = [
                ['Outcome', '2019-20',  asset('assets/pdf/naac/OUTCOMES 2019-20.pdf'),],
                ['Outcome', '2020-21',  asset('assets/pdf/naac/OUTCOMES 2020-21.pdf'),],
                ['Outcome', '2021-22',  asset('assets/pdf/naac/Outcome Report  2021-22.pdf'),],
                ['Outcome', '2022-23',  asset('assets/pdf/naac/OUTCOME REPORT 22-23.pdf'),],
                ];
        }
        elseif ($type === 'ACTION-TAKEN-REPORT') {
            $title = 'IQAC ACTION TAKEN REPORT';
            $tableHeader = ['Report', 'Year'];
            $tableData = [
                ['	Action taken report', '2021-22',  asset('assets/pdf/naac/ACTION TAKEN REPORT 21-22.pdf'),],
                ['	Action taken report', '2022-23',  asset('assets/pdf/naac/IQAC ACTION TAKEN REPOER 2022-23.pdf'),],
                ];
        }

        return view('naac', compact('title', 'tableHeader', 'tableData'));
    }

    public function report( $type)
    {
        if ($type === 'COLLEGE-ANNUAL-REPORTS') {
            $title = 'ANNUAL REPORTS';
            $tableHeader = ['Annual Report', 'Year'];
            $tableData = [
                ['	Annual report', '2016-17',  asset('assets/pdf/annualReport/Annual Report 2016-17.pdf'),],
                ['	Annual report', '2017-18',  asset('assets/pdf/annualReport/Annual  Report  2017-18.pdf'),],
                ['	Annual report', '2018-19',  asset('assets/pdf/annualReport/Annual Report 2018-19.pdf'),],
                ['	Annual report', '2019-20',  asset('assets/pdf/annualReport/Annual  Report  2019-20.pdf'),],
                ['	Annual report', '2020-21',  asset('assets/pdf/annualReport/ANNUAL REPORT 2020-21.pdf'),],
                ['	Annual report', '2021-22',  asset('assets/pdf/annualReport/Annual Report 2021-22.pdf'),],
                ['	Annual report', '2022-23',  asset('assets/pdf/annualReport/Annual Report 2022-23.pdf'),],
                ];
        }
        elseif($type ==='STUDENTS-SATISFACTION-SURVEY'){
            $title = 'STUDENTS SATISFACTION SURVEY';
            $tableHeader = ['	Students Satisfaction Survey', 'Year'];
            $tableData = [
                ['	Students Satisfaction Survey Report', '2019-20',  asset('assets/pdf/annualReport/Student Satisfaction Survey(2022-23).pdf'),],
                ['	Students Satisfaction Survey Report', '2020-21',  asset('assets/pdf/annualReport/Students Satisfaction Survey.pdf'),],
                ['	Students Satisfaction Survey Report', '2021-22',  asset('assets/pdf/annualReport/Student Satisfaction Survey (2021-2022).pdf'),],
                ['	Students Satisfaction Survey Report', '2022-23',  asset('assets/pdf/annualReport/Student Satisfaction Survey(2022-23).pdf'),],


            ];
        }
        elseif($type ==='STUDENTS-FEEDBACK-SURVEY'){
            $title = 'STUDENTS FEEDBACK';
            $tableHeader = ['Students Feedback', 'Year'];
            $tableData = [
                ['Students Feedback_2019_20_Report', 'Yearly Status Report - 2019-20',  asset('assets/pdf/annualReport/Students Feedback 2019-20.pdf'),],
                ['Students Feedback_2020_21_Report', 'Yearly Status Report - 2020-21',  asset('assets/pdf/annualReport/Students feedback 2020-21.pdf'),],
                ['Students Feedback_2021_22_Report', 'Yearly Status Report - 2021-22',  asset('assets/pdf/annualReport/Student Feedback 21-22.pdf'),],
                ['Students Feedback_2022_23_Report', 'Yearly Status Report - 2022-23',  asset('assets/pdf/annualReport/Students Feedback 22-23.pdf'),],
                ['Students Feedback_2023_24_Report', 'Yearly Status Report - 2023-24',  asset('assets/pdf/annualReport/STUDENTS FEEDBACK 23-24.pdf'),],


            ];
        }
        elseif($type ==='TEACHERS-FEEDBACK-SURVEY'){
            $title = 'TEACHERS FEEDBACK SURVEY';
            $tableHeader = ['Teachers Feedback Survey', 'Year'];
            $tableData = [
                ['	Teachers Feedback_2019_20_Survey Report', 'Yearly Status Report - 2019-20',  asset('assets/pdf/annualReport/Teachers Feedback 2019-20.pdf'),],
                ['	Teachers Feedback_2020_21_Survey Report', 'Yearly Status Report - 2020-21',  asset('assets/pdf/annualReport/Teachers Feedback 2020-21.pdf'),],
                ['	Teachers Feedback_2021_22_Survey Report', 'Yearly Status Report - 2021-22',  asset('assets/pdf/annualReport/Teacher Feedback 21-22.pdf'),],
                ['	Teachers Feedback_2022_23_Survey Report', 'Yearly Status Report - 2022-23',  asset('assets/pdf/annualReport/Teachers Feedback 22-23.pdf'),],
                ['	Teachers Feedback_2023_24_Survey Report', 'Yearly Status Report - 2023-24',  asset('assets/pdf/annualReport/TEACHERS FEEDBACK 23-24.pdf'),],


            ];
        }

        return view('reports', compact('title', 'tableHeader', 'tableData'))->with('type', $type);
    }

    public function activities( $type)
    {
        if ($type === 'NSS') {
            $title = 'NSS';
            $tableHeader = ['NSS', 'Year'];
            $tableData = [
                ['Report', '2019-2020',  asset('assets/pdf/activities/NSS Report 2019-20.pdf'),],
                ['Report', '2020-2021',  asset('assets/pdf/activities/NSS annual report 2020-21.pdf'),],
                ['Report', '2021-2022',  asset('assets/pdf/activities/NSS Annual  report 2021-22.pdf'),],
                ];
        }
        if ($type === 'NCC') {
            $title = 'NCC';
            $tableHeader = ['NCC', 'Year'];
            $tableData = [
                ['Report', '2019-2020', '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2021-2022',  '#',],
                ];
        }
        if ($type === 'ROVERS-RANGERS') {
            $title = 'ROVERS & RANGERS';
            $tableHeader = ['Rovers & Rangers Activity Report', 'Year'];
            $tableData = [
                ['Rovers & Rangers Activity Reports 1', '2019-2020',  '#',],
                ['Rovers & Rangers Activity Reports 2', '2021-2022',  '#',],
                ];
        }
        if ($type === 'ECO-CLUB') {
            $title = 'ECO CLUB';
            $tableHeader = ['ECO CLUB', 'Year'];
            $tableData = [
                ['Report', '2019-2020',  '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2021-2022',  '#',],
            ];
        }
        if ($type === 'RED-RIBBON-CLUB') {
            $title = 'RED RIBBON ANNUAL REPORTS';
            $tableHeader = ['Annual Report', 'Year'];
            $tableData = [
                ['RRC report ', '2017-2018',  '#',],
                ['RRC report ', '2018-2019',  '#',],
                ['RRC report ', '2019-2020',  asset('assets/pdf/activities/Red Ribbon Club 2019-20.pdf'),],
                ['RRC report ', '2020-2021',  '#',],
                ['RRC report ', '2021-2022',  '#',],
            ];
        }
        if ($type === 'REGULAR-ACTIVITIES') {
            $title = 'REGULAR ACTIVITIES';
            $tableHeader = ['Regular Activities', 'Year'];
            $tableData = [
                ['	Regular Activities Reports 1', '2021-2022',  '#',],
                ['	Regular Activities Reports 2', '2021-2022',  '#',],

            ];
        }
        if ($type === 'ACADEMIC-ACTIVITIES') {
            $title = 'ACADEMIC ACTIVITIES';
            $tableHeader = ['	Academic Activities', 'Year'];
            $tableData = [
                ['	Academic Activities Report', '2019-20',  '#',],
                ['	Academic Activities Report', '2020-201',  '#',],
                ['	Academic Activities Report', '2021-22',  asset('assets/pdf/activities/ACADEMIC COMMITTEE REPORT 2021-22.pdf'),],
                ['	Academic Activities Report', '2022-23',  asset('assets/pdf/activities/ACADEMIC COMMITTEE REPORTS 22-23.pdf'),],
            ];
        }
        if ($type === 'EXPERIENTIAL-LEARNING') {
            $title = 'EXPERIENTIAL LEARNING';
            $tableHeader = ['	Experiential Learning Report', 'Year'];
            $tableData = [
                ['Experiential Learning Report', '2022-23',  asset('assets/pdf/activities/EXPERIENTIAL LEARNING 2022-23.pdf'),],
            ];
        }
        if ($type === 'CONFERENCES-SEMINARS-WORKSHOPS') {
            $title = 'CONFERENCES REPORTS';
            $tableHeader = ['Conferences Report', 'Year'];
            $tableData = [
                ['  IQAC FDP Report 23-24', '',  asset('assets/pdf/activities/IQAC-FDP REPORT23-24.pdf'),],
                ['  Anti Drugs Report 23-24', '',  asset('assets/pdf/activities/ANTI-DRUGS REPORT23-24.pdf'),],
                ['	IQAC Webinar', '',  asset('assets/pdf/activities/IQAC webinar.pdf'),],
                ['	International Conference', '',  asset('assets/pdf/activities/International Conference.pdf'),],
                ['	COVID webinar', '',  asset('assets/pdf/activities/COVID webinar.pdf'),],
                ['	National webinar Report', '',  asset('assets/pdf/activities/NATIONAL WEBINAR JUNE 21 REPORT.pdf'),],
                ['	National workshop Report', '',  asset('assets/pdf/activities/NATIONAL WORKSHOP NOV 21 REPORT.pdf'),],
                ['	CAREER COUNSELLING WEBINAR Report', '',  asset('assets/pdf/activities/CAREER COUNSELLING WEBINAR MAY 22 REPORT.pdf'),],
                ['  Chemistry Two Days Workshop Report', '',  asset('assets/pdf/activities/REPORT EXPERIENTIAL CHEMISTRY WORKSHOP 22-23.pdf'),],
                ['	Science One Day Workshop Report', '', '#',],

            ];
        }
        if ($type === 'WOMEN-GRIEVANCE-REDRESSAL-CELL') {
            $title = 'WOMEN GRIEVANCE REDRESSAL CELL';
            return view('womenGrievance', compact('title'));

        }



        return view('activities', compact('title', 'tableHeader', 'tableData'));
    }

    public function academics( $type)
    {
        if ($type === 'SYLLABUS') {
            $title = 'SYLLABUS';
            $tableHeader = ['	Syllabus', 'Course'];
            $tableData = [
                ['	Bachelor of Computer Application (BCA)', 'UG',  asset('assets/pdf/academic/BCA.pdf'),],
                ['	Bachelor of Commerce ( BCom)', 'UG',  asset('assets/pdf/academic/BCOM ANNUAL.pdf'),],
                ['Botany Annual Pattern', 'UG',  asset('assets/pdf/academic/BOTANY ANNUAL.pdf'),],
                ['Chemistry Annual Pattern', 'UG',  asset('assets/pdf/academic/CHEMISTRY ANNUAL.pdf'),],
                ['Mathematics Annual Pattern', 'UG',  asset('assets/pdf/academic/Mathematics Annual.pdf'),],
                ['	Physics Annual Pattern', 'UG',  asset('assets/pdf/academic/PHYSICS ANNUAL.pdf'),],
                ['Zoology Annual Pattern', 'UG',  asset('assets/pdf/academic/ZOOLOGY ANNUAL.pdf'),],
                ['English syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/ENGLISH ANNUAL.pdf'),],
                ['Hindi syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/HINDI ANNUAL.pdf'),],
                ['Sanskrit syllabus Annual Pattern', 'UG',  '#',],
                ['Economics syllabus Annual Pattern', 'UG',  '#',],
                ['History syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/HISTORY ANNUAL.pdf'),],
                ['Political Science syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/POLITICAL SCIENCE ANNUAL.pdf'),],
                ['Public Administration syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/PUB. AD. ANNUAL.pdf'),],
                ['	Philosophy Science syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/PHILOSOPHY ANNUAL.pdf'),],
                ['Music (V & I) syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/MUSIC ANNUAL.pdf'),],
                ['	Physical Education syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/PHYSICAL EDUCATION ANNUAL.pdf'),],
                ['Geography syllabus Annual Pattern', 'UG',  asset('assets/pdf/academic/GEOGRAPHY ANNUAL.pdf'),],

                ];
        }
        if ($type === 'ACADEMIC-CALENDER') {
            $title = 'ACADEMIC CALENDER';
            $tableHeader = ['Academic Calender', 'Year'];
            $tableData = [
                ['Academic Calender', '2019-2020',  asset('assets/pdf/academic/Academic Calender 2019-20.pdf'),],
                ['Academic Calender', '2020-2021',  asset('assets/pdf/academic/Academic Calender 2020-21.pdf'),],
                ['Academic Calender', '2021-2022',  asset('assets/pdf/academic/Academic Calender 21-22.pdf'),],
                ['Academic Calender', '2022-2023',  asset('assets/pdf/academic/Academic Calender 22-23.pdf'),],
                ];
        }


        return view('academics', compact('title', 'tableHeader', 'tableData'));
    }


}
