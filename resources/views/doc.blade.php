@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


  
<div >
<h1 class="bg-info" >Documentation</h1>
  
  <h2 class="bg-success" style = "width: 450px;" > Peer Review Reflection</h2>
    <p> This was the first time I have done peer reviews in any of my courses. To me, doing the peer review has both pros and cons. 
    The benefits of the peer review are students get to identify the strengths and weaknesses of their code and they get to know how the other student has tackled a certain problem.
    They can share the idea of how to solve a certain problem. This also provides the students to bounce their ideas to each other. 
    As one student cannot have the same reviewer for two consecutive weeks, this provides the student to get to know more students. 
    Students also receive the feedback to their code. 
    But at the same time, there are few disadvantages to this approach as well.
    One of the main disadvantage is that both the reviewers are students and they have the soft corner for each other.
    This results in unwilling to critically think about other students work and often default to unwilling praise. 
    If both do not know about a certain solution, they are unable to provide a helpful feedback to each other. 
    So I think this approach is a waste of time too. </p>

  <h2 class="bg-success" style = "width: 450px;"><strong>Problem Statement</strong></h2>
    <p>Building a food ordering application. With this application, restaurants can list the dishes they want to sell. Customers can order selected dishes.  </p><br> 
    
    <h2 class="bg-success" style = "width: 450px;"><strong>Completed Tasks</strong></h2>
    <li>All pages have navigation menu at the top. </li>
    <li>The home page displays all the posts. </li>
    <li>Next to each post, there is a number indicating how many comments are there for that post.</li>
    <li>From the home page, a click on a particular post brings up the comments page for that post. The comments page contains that particular post and comments for that post. </li>
    <li>Home page displays a form to create a new post. Each post contains a title, message, date, icon and a username.  To create a new post, a user must enter a title, message and username. Date is system generated which user does not have to type in while icon is the same for all posts. </li>
    <li>User can edit post. After a post is edited, the comments page for that post is displayed. </li>
    <li>User can delete post. After a post is deleted, the comments for that post are also deleted. </li>
    <li>User can add comments to a post. The form to add comments is displayed on the comments page. A comment must include username and message. </li>
    <li>User can delete comments.</li>
    <li>There is a unique users page which list all the users only once who have made a post. Clicking on the username brings up the posts made by that user.</li>
    <li>There is a most recent page which shows the posts made in the last 7 days. </li><br>
  
    <h2 class="bg-success" style = "width: 450px;"><strong>Technical Requirements fulfilled</strong></h2> 
    <li>This social media application is implemented using Laravel.</li>
    <li>Database is implemented via Raw SQL and executed through Laravel’s DB class.</li>
    <li>An SQL file is used to create tables and insert initial data. </li>
    <li>All inputs are validated.</li>
    <li>HTML and SQL sanitisation is implemented.</li>
    <li>Template inheritance is being used for this application. </li><br>

    <h2 class="bg-success" style = "width: 450px;"><strong>Entity Relationship Diagram</strong></h2>
    <img src="products_images/er.png" alt="product image" style="width:600px;height:600px;">
</div>


   
@endsection
