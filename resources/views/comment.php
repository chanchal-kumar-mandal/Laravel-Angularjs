<div class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
        <h4>Commenting System</h4>
    </div>
    
    <!-- NEW COMMENT FORM =============================================== -->
    <form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->
    
        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Enter Name">
        </div>
    
        <!-- COMMENT TEXT -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
        </div>
    
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-center">   
            <button type="submit" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-leaf"></i>  Submit</button>
        </div>
    </form>
    
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
        <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
        <p>{{ comment.text }}</p>
    
        <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></p>
    </div>
    
</div>
</div> 