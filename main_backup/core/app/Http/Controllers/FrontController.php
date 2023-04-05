<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FrontController extends Controller
{
	//start jack methods
    public function passEnglishTeasTest(){
        $meta_description = "Need help to pass the TEAS English Test? This article provides tips to help you improve your reading, grammar, and vocabulary skills";
        return view('pages.passEnglishTeasTest',compact('meta_description'));
    }
	public function hardestPartOfTeasTest(){
		$meta_description = "TEAS test can be challenging as students struggle with different sections. Learn about  TEAS test&#39;s hardest part and how to overcome it.";
		return view('pages.hardestPartOfTeasTest',compact('meta_description'));
	}
     public function noOfQuestionsOnTeasTest(){
        $meta_description = "TEAS Test is a standardized test that measures basic academic skills in Math,English, science and reading.Learn of English questions asked.";
        return view('pages.noOfQuestionsOnTeasTest',compact('meta_description'));
    }


    //end jack methods

    //start Meshack
    public function breaking_down_the_teas_test(){
        $meta_description = "The TEAS (Test of Essential Academic Skills) test is a standardized exam that evaluates the academic readiness of prospective nursing students.";
        return view('pages.breaking-down-the-teas-test',compact('meta_description'));
    }
    public function free_teas_test_resources(){
        $meta_description = "Students who have passed the TEAS have found the resources provided below applicable. Also, the tutors that assist the TEAS Study Group have endorsed  them. There are several choices; pick the one that will suit you the best. TEAS test practice resources come in both free and paid varieties. They include:";
        return view('pages.free-teas-test-resources',compact('meta_description'));
    }
    public function what_is_the_teas_test(){
        $meta_description = "TEAS stands for Test of Essential Academic Skills. The TEAS test is meant for nursing students who dream of joining nursing school. It gauges the candidates' academic potential and forms part of the application process that nursing students should undertake.";
        return view('pages.what-is-the-teas-test',compact('meta_description'));
    }
    public function how_many_practise_teast_test_should_you_take(){
        $meta_description = "Admittedly, there should be no limit when taking the TEAS practice test, but it's important to time yourself and learn your weak areas as you strengthen your time management capabilities.";
        return view('pages.how-many-practise-teas-test-should-you-take',compact('meta_description'));
    }

    public function comprehensive_teas_7_practise_test(){
        $meta_description = "Undertaking TEAS practise questions to test your knowledge provides an excellent way to prepare for the exam and get familiar with what’s on the ATI TEAS exam in 2023.";
        return view('pages.comprehensive-TEAS-7-practice-test',compact('meta_description'));
    }
	 //ends Mesh
    public function nursingScoreTeasTest(){
        $meta_description = "teas test scores for nursing- everything you need to know";
        return view('pages.nursingScoreTeasTest',compact('meta_description'));
    }
    
    public function englishTeasTest(){
        $meta_description = "everything you need to pass the teas english test section";
        return view('pages.englishTeasTest',compact('meta_description'));
    }

    public function teasScienceQuiz(){
        $meta_description = "teas science practice questions";
        return view('pages.teasScienceQuiz',compact('meta_description'));
    }
    public function teasReadingPracticeTest(){
        $meta_description = "What’s tested on the TEAS reading section, and what must you do to pass? Here is the best strategy to pass the TEAs reading practice test 2023.";
        return view('pages.teasReadingPracticeTest',compact('meta_description'));
    }
    public function atiTeasPracticeTest(){
        $meta_description = "How does the ATI TEAS Practice Test prepare you for your TEAS exam? Here is how the ATI TEAS Practice Test 2023 can help you improve your TEAS scores.";
        return view('pages.atiTeasPracticeTest',compact('meta_description'));
    }


    
    
    //-----------------------Carilus Start----------------------------------------//
     public function tipsForPassingTeas(){
        $meta_description = "Discover study strategies, test-taking techniques, and other essential tips to pass the TEAS test";
        return view('pages.tips-for-passing-teas',compact('meta_description'));
    }
    public function teasScienceTest(){
        $meta_description = "Our practice test and preparation tips have got you covered. Master key concepts in sciences and more with our comprehensive study guide";
        return view('pages.teas-science-test-and-preparation-tips',compact('meta_description'));
    }
    public function teasEnglishPracticeTest(){
        $meta_description = "From essential grammar rules to advanced reading comprehension strategies, our expert tips and real-world examples will help you excel.";
        return view('pages.teas-english-practice-test',compact('meta_description'));
    }
    public function teasScoresForNursingPrograms(){
        $meta_description = "Our comprehensive guide will help you understand what the TEAS test measures, how to prepare for it, and what scores you need to succeed in nursing school.";
        return view('pages.teas-test-scores-for-nursing-programs',compact('meta_description'));
    }

    public function similaritiesBetweenTeasAndActualTest(){
        $meta_description = "Learn how ATI tests can help prepare you for real-life exams and gain an understanding of the key similarities between the two types of assessments.";
        return view('pages.similarities-between-ati-vi-practice-and-actual-tests',compact('meta_description'));
    }
    
    //-----------------------Carilus End-------------------------------------------//


    // ---------------------------- Mbadi ---------------------------------------- //
    public function teasMathPracticeTest(){
        $meta_description = "Get ready for the TEAS math section with our expert resources and comprehensive practice tests. Build your knowledge and confidence to excel on test day. Start preparing today and ace the TEAS math section.";
        return view('pages.teas-math-practice-test',compact('meta_description'));
    }

    public function isTeasTestHard(){
        $meta_description = "Unsure if the TEAS test is difficult? Our article provides insights from students who have taken the exam, along with tips for how to prepare effectively. Discover what to expect on test day and gain the confidence you need to ace the TEAS exam. Read now and ease your worries about the TEAS test.";
        return view('pages.is-the-teas-test-hard',compact('meta_description'));
    }

    public function englishTeasTestFree(){
        $meta_description = "Gain access to comprehensive TEAS study material. Study and pass your TEAs test with study papers and professional exam consultation from Naxlex.";
        return view('pages.teas-english-practice-test-free',compact('meta_description'));
    }

    public function teasReadingTest(){
        $meta_description = "Gain access to comprehensive TEAS study material to pass your reading exam first time. Study and pass your TEAs test with study papers and professional reading exam consultation from Naxlex.";
        return view('pages.mastering-teas-reading-test',compact('meta_description'));
    }
    
    // ---------------------------- Mbadi End ------------------------------------- //
}