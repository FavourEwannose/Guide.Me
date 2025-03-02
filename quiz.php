<!DOCTYPE html>
<html lang="en">
  <?php
// Initialize the session
session_start();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php

// Define your arrays of questions for the two sections
$generalQuestions = [
    "What is the capital of France?",
    "Who developed the theory of relativity?",
    "Solve: 15 x 3 = ?",
    "What is the chemical symbol for water?",
    "Who wrote 'To Kill a Mockingbird'?",
    "What is the largest planet in our solar system?",
    "What year did World War II end?",
    "What is the currency of Japan?",
    "Who painted the Mona Lisa?",
    "What is the tallest mountain in the world?",
    "What is the square root of 144?",
    "What element has the atomic number 6?",
    "Who is known as the Father of Computers?",
    "What is the boiling point of water in Celsius?",
    "What is the largest ocean on Earth?",
    "Who wrote the play 'Hamlet'?",
    "What is the hardest natural substance on Earth?",
    "What gas do plants absorb from the atmosphere?",
    "What is the main language spoken in Brazil?",
    "What is the capital of Egypt?"
];

$personalityQuestions = [
    "I enjoy engaging in creative activities.",
    "I prefer planning and organizing my tasks.",
    "I enjoy taking risks and trying new experiences.",
    "I find it easy to empathize with others.",
    "I am comfortable in social situations.",
    "I often seek out new challenges.",
    "I prefer to work independently.",
    "I value structure and routine in my daily life.",
    "I enjoy brainstorming and generating new ideas.",
    "I handle stress well.",
    "I am detail-oriented in my work.",
    "I am motivated by achieving goals.",
    "I adapt quickly to change.",
    "I enjoy collaborating with others.",
    "I am organized and punctual.",
    "I often reflect on my feelings.",
    "I am confident in my problem-solving abilities.",
    "I value creativity over tradition.",
    "I am open to new ideas.",
    "I am driven to succeed."
];
?>

<?php
// quiz.php

// Include the header file
include 'header.php'; 
?>

<!-- Hero-area -->
<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
<!-- /Backgound Image -->

<div class="container">
  <div class="row" >
    <div class="col-md-10 col-md-offset-1 text-center">
      <ul class="hero-area-tree">
        <li><a href="index.php">Home</a></li>
        <li>Quiz.Personality Test</li>
      </ul>
      <h1 class="white-text">Get Started</h1>

    </div>
  </div>
</div>

</div>
<!-- /Hero-area -->


<!-- Main Content -->
<div class="container" id="quizTabsContent">
  <h1 class="text-center">Advanced Quiz & Personality Test</h1>
  <!-- Navigation Tabs -->
  <ul class="nav nav-tabs" id="quizTabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="general-tab" data-toggle="tab" href="#generalSection" role="tab" aria-controls="generalSection" aria-selected="true">General Quiz</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="personality-tab" data-toggle="tab" href="#personalitySection" role="tab" aria-controls="personalitySection" aria-selected="false">Personality Test</a>
    </li>
  </ul>
  
  <!-- Tab Content -->
  <div class="tab-content" id="quizTabsContent">
    <!-- General Quiz Section -->
    <div class="tab-pane fade show active" id="generalSection" role="tabpanel" aria-labelledby="general-tab">
      <form method="post" action="process_quiz.php" style="margin-top: 20px;">
      <!-- <pre><?php print_r($generalQuestions); ?></pre> -->

      <?php foreach ($generalQuestions as $index => $question): 
    $inputId = "q_" . ($index + 1);
?>
  <div class="form-group">
    <label for="<?php echo $inputId; ?>">
      <?php echo ($index + 1) . ". " . htmlspecialchars($question); ?>
    </label>
    <input type="text" id="<?php echo $inputId; ?>" name="<?php echo $inputId; ?>" class="form-control" placeholder="Your answer here" required>
  </div>
<?php endforeach; ?>

        <button type="submit" class="btn btn-primary">Submit Quiz</button>
      </form>
      
    </div>
    
    <!-- Personality Test Section -->
    <div class="tab-pane fade" id="personalitySection" role="tabpanel" aria-labelledby="personality-tab">
      <form method="post" action="process_personality.php" style="margin-top: 20px;">
      <?php foreach ($personalityQuestions as $index => $statement): 
    $selectId = "p_" . ($index + 1);
?>
  <div class="form-group">
    <label for="<?php echo $selectId; ?>">
      <?php echo ($index + 1) . ". " . htmlspecialchars($statement); ?>
    </label>
    <select id="<?php echo $selectId; ?>" name="<?php echo $selectId; ?>" class="form-control" required>
      <option value="1">Strongly Disagree</option>
      <option value="2">Disagree</option>
      <option value="3">Neutral</option>
      <option value="4">Agree</option>
      <option value="5">Strongly Agree</option>
    </select>
  </div>
<?php endforeach; ?>

        <button type="submit" class="btn btn-primary">Submit Personality Test</button>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</html>