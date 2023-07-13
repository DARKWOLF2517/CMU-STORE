@extends('layouts.student_navigation_bar')


@section('main-content')
<div class="content">
    <div class="container" id="evaluationform">
        <h2>STUDENT ORGANIZATIONS & ACTIVITIES EVALUATION FORM</h2>
        <hr>
        <form>
            <div class="form-group">
                <h4 for="name">Name of Organization:</H4>
            </div>
            <div class="form-group">
              <h5 for="name">Event:</H5>
            </div>
            <div class="form-group">
              <h6 for="name">Position Held:</H6>
            </div>
            <div class="form-group">
              <h6 for="name">Date of Event:</H6>
            </div>
            <hr>
            <div class="form-group">
              <h6 for="name">Legend:</H6>
                <small> O – Outstanding VS – Very Satisfactory S – Satisfactory   MS – Moderately Satisfactory   NI – Needs Improvement </small>
            </div>
            <hr>
            <div class="form-group">
                <h5>I.  REGISTRATION</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="clarity">a.	Clarity of information on the requirements  :</label>
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
                        <label for="preparation">b.	Adequate time given to prepare the requirements          </label>
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
                        <label for="Effectiveness">c.	Effectiveness of interview screening conducted:</label>
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
                      <label for="assistance">d.	Assistance in the preparation of documents:</label>
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
                    <label for="schedule">e.	Schedule in the submission of requirement:</label>
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
                  <label for="accreditation">f.	Accreditation of Student Organization based on standard requirements: </label>
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
                <h5>II.  CONDUCT OF ACTIVITIES</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Clarity of information on the requirements to conduct an activity:</label>
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
                        <label for="organization">b.	Availability of system/ mechanism for fast processing of permit to conduct activity</label>
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
                        <label for="speakers">c.	Appropriateness of time allotted for the approval of the permit</label>
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
                <h5>III.  ADVISORSHIP</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Appropriateness in the screening of Organization advisers:</label>
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
                        <label for="organization">b.	Attendance in the student activity:</label>
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
                        <label for="speakers">c.	Ability to give guidance and support:</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      <label for="speakers">d.	Adviser qualifications met</label>
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
                <h5>IV.  MONITORING & SUPERVISION</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Availability of Head of Student Organization and Activities:</label>
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
                        <label for="organization">b.	Availability of standard procedure in regulating student activities:</label>
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
                        <label for="speakers">c.	Availability of monitoring system of student activities:</label>
                        <select class="form-control" id="speakers">
                          <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      <label for="speakers">d.	Assistance for the regular submission of AR      </label>
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
                      <label for="speakers">e.	Periodical checking of financial reports:</label>
                      <select class="form-control" id="speakers">
                        <option>Select choice</option>
                        <option>O – Outstanding</option>
                        <option>VS – Very Satisfactory</option>
                        <option>S – Satisfactory</option>
                        <option>MS – Moderately Satisfactory</option>
                        <option>NI – Needs Improvement</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label for="speakers">f.	Presence of Open-line communications on organization-related problems </label>
                    <select class="form-control" id="speakers">
                        <option>Select choice</option>
                      <option>O – Outstanding</option>
                      <option>VS – Very Satisfactory</option>
                      <option>S – Satisfactory</option>
                      <option>MS – Moderately Satisfactory</option>
                      <option>NI – Needs Improvement</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="speakers">g.	Appropriateness of action on organization related</label>
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
              <h5>V. Efficiency in the delivery of the following personnel:</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Security</label>
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
                        <label for="organization">b.	Electrical </label>
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
                        <label for="speakers">c.	Janitorial</label>
                        <select class="form-control" id="speakers">
                            <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                <label for="event">d.	Others (please specify) </label>
                <input type="text" class="form-control" id="event" required placeholder="Type here">
            </div>
          </div>
        </div>
        <hr>
                <h5>VI.  Effectiveness of School Facilities and Venue</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Appropriate charges or billings</label>
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
                        <label for="organization">b.	Ventilation</label>
                        <select class="form-control" id="Ventilation">
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
                        <label for="speakers">c.	Cleanliness and Sanitation</label>
                        <select class="form-control" id="cleanliness">
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
                <h5>VII. Evaluation & Recognition</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="venue">a.	Implementation of periodic evaluation of student organizations</label>
                        <select class="form-control" id="implementation">
                            <option>Select choice</option>
                            <option>O – Outstanding</option>
                            <option>VS – Very Satisfactory</option>
                            <option>S – Satisfactory</option>
                            <option>MS – Moderately Satisfactory</option>
                            <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="organization">b.	Healthy competition motivated</label>
                        <select class="form-control" id="competition">
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
                        <label for="speakers">c.	Use of appropriate evaluation criteria</label>
                        <select class="form-control" id="speakers">
                            <option>Select choice</option>
                          <option>O – Outstanding</option>
                          <option>VS – Very Satisfactory</option>
                          <option>S – Satisfactory</option>
                          <option>MS – Moderately Satisfactory</option>
                          <option>NI – Needs Improvement</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      <label for="speakers">d.	Proper keeping of records/ documents for future reference           </label>
                      <select class="form-control" id="speakers">
                        <option>Select choice</option>
                        <option>O – Outstanding</option>
                        <option>VS – Very Satisfactory</option>
                        <option>S – Satisfactory</option>
                        <option>MS – Moderately Satisfactory</option>
                        <option>NI – Needs Improvement</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label for="speakers">e.	Fairness in the conduct of evaluation           </label>
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
            <div class="form-group">
              <label for="feedback">Comments or Suggestions:</label>
              <textarea class="form-control" id="feedback" rows="3" placeholder="Enter your feedback" required></textarea>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
