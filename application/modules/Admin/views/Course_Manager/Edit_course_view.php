<div class="form-group">
	<label for="courseName" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Name:</span></label>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<input type="text" class="form-control" name="courseName" id="course_name" value="<?php echo $info->course_name; ?>" placeholder="Course Name" />
	</div>
</div>

<div class="space-4"></div>

<div class="form-group">
	<label for="courseCode" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Code:</span></label>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<input type="text" class="form-control" name="courseCode" id="course_code" value="<?php echo $info->course_code; ?>" placeholder="Course Code" />
	</div>
</div>
<input type="hidden" name="codeUpdate" id="codeUpdate" value="<?php echo $info->course_code; ?>" />
<input type="hidden" name="nameUpdate" id="nameUpdate" value="<?php echo $info->course_name; ?>" />