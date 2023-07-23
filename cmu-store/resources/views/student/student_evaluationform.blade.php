@extends('layouts.student_navigation_bar')


@section('main-content')
<div class="content">
    <div class="container" id="evaluationform">
        <h2>STUDENT ORGANIZATIONS & ACTIVITIES EVALUATION FORM</h2>
        <hr>
        <form>
            <div class="form-group">
                <h4 for="name">Name of Activity:</H4>
            </div>
            <div class="form-group">
              <h5 for="name">Name of Organization:</H5>
            </div>
            <div class="form-group">
              <h6 for="name">Date & Time:</H6>
            </div>
            <div class="form-group">
              <h6 for="name">Venue:</H6>
            </div>
            <hr>
            <div class="form-group">
              <h6 for="name">Legend:</H6>
                <small> O – Outstanding VS – Very Satisfactory S – Satisfactory   MS – Moderately Satisfactory   NI – Needs Improvement </small>
            </div>
            <hr>
            <div class="form-group">
                <h5>1. PROGRAM/ACTIVITY</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="clarity">a.	Stimulates the interest of the students.</label>
                        <select class="form-control" id="clarity">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="preparation">b.	Provide equal opportunities to all students or participants.       </label>
                        <select class="form-control" id="preparation">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Effectiveness">c.	Enhance the learning experience of the students.</label>
                        <select class="form-control" id="Effectiveness">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      <label for="assistance">d.	Help in recognizing and developing students’ inner skills such as leadership qualities, creative and innovative skills, etc.</label>
                      <select class="form-control" id="assistance">
                        <option>Select choice</option>
                        <option>O – Outstanding</option>
                        <option>VS – Very Satisfactory</option>
                        <option>S – Satisfactory</option>
                        <option>MS – Moderately Satisfactory</option>
                        <option>NI – Needs Improvement</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="schedule">e.	Help in developing richer learning experiences by giving the students chance to think in new ways to solve a problem or answer a question.</label>
                    <select class="form-control" id="schedule">
                      <option>Select choice</option>
                      <option>O – Outstanding</option>
                      <option>VS – Very Satisfactory</option>
                      <option>S – Satisfactory</option>
                      <option>MS – Moderately Satisfactory</option>
                      <option>NI – Needs Improvement</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="accreditation">f.	Satisfy students’ need to take time outs to do more than just studying. </label>
                  <select class="form-control" id="accreditation">
                    <option>Select choice</option>
                    <option>O – Outstanding</option>
                    <option>VS – Very Satisfactory</option>
                    <option>S – Satisfactory</option>
                    <option>MS – Moderately Satisfactory</option>
                    <option>NI – Needs Improvement</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="accreditation">g.	Give students a chance to relax, refresh and mingle easily with others.</label>
                <select class="form-control" id="accreditation">
                  <option>Select choice</option>
                  <option>O – Outstanding</option>
                  <option>VS – Very Satisfactory</option>
                  <option>S – Satisfactory</option>
                  <option>MS – Moderately Satisfactory</option>
                  <option>NI – Needs Improvement</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="accreditation">h.	Provide opportunity for students to apply learning in their practical life.</label>
                <select class="form-control" id="accreditation">
                  <option>Select choice</option>
                  <option>O – Outstanding</option>
                  <option>VS – Very Satisfactory</option>
                  <option>S – Satisfactory</option>
                  <option>MS – Moderately Satisfactory</option>
                  <option>NI – Needs Improvement</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="accreditation">i.	Provide opportunity for student to work in team.</label>
                <select class="form-control" id="accreditation">
                  <option>Select choice</option>
                  <option>O – Outstanding</option>
                  <option>VS – Very Satisfactory</option>
                  <option>S – Satisfactory</option>
                  <option>MS – Moderately Satisfactory</option>
                  <option>NI – Needs Improvement</option>
                </select>
            </div>
                </div>
                <hr>
                <h5>2. SPEAKER (IF APPLICABLE)</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Provides relevant and up to date information about the program/activity</label>
                        <select class="form-control" id="venue">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="organization">b.	Built rapport with the participants</label>
                        <select class="form-control" id="organization">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="speakers">c.	has good balance between theory & practice</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="speakers">d.	Has good mastery of the content/ subject matter</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <hr>
                <h5>3. Venue</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Ventilation</label>
                        <select class="form-control" id="venue">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="organization">b.	Space</label>
                        <select class="form-control" id="organization">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="speakers">c.	Ambiance (light & Sounds)</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                <hr>
                <h5>4.  PARTICIPATION</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Attendance</label>
                        <select class="form-control" id="venue">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="organization">b.	Cooperation</label>
                        <select class="form-control" id="organization">
                        <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="speakers">c.	Punctuality</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue"><h5>5.  FOOD/HOSPITALITY</h5></label>
                        <select class="form-control" id="venue">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="venue"><h5>6.  TEAMWORK/COORDINATION OF ORGANIZATION</h5></label>
                            <select class="form-control" id="venue">
                                <option>Select choice</option>
                                <option>O – Outstanding</option>
                                <option>VS – Very Satisfactory</option>
                                <option>S – Satisfactory</option>
                                <option>MS – Moderately Satisfactory</option>
                                <option>NI – Needs Improvement</option>
                            </select>
                        </div>
                <hr>
                <h5> Part II. Please answer the following questions:</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue"><h5>1.	How would you rate the overall usefulness/relevance of the program/activity? </h5></label>
                        <select class="form-control" id="venue">
                            <option>Select choice</option>
                            <option>Excellent</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="venue"><h5>2.	How would you rate the overall quality of the program/activity?</h5></label>
                            <select class="form-control" id="venue">
                                <option>Select choice</option>
                                <option>Excellent</option>
                                <option>Very Good</option>
                                <option>Good</option>
                                <option>Fair</option>
                                <option>Poor</option>
                            </select>
                        </div>


            <div class="form-group">
              <label for="feedback">Comments or Suggestions:</label>
              <textarea class="form-control" id="feedback" rows="3" placeholder="Enter your feedback" required></textarea>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
