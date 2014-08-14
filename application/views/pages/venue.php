    <!-- Page javascript files -->
    <script src="<?php echo base_url(JS."JSLINQ.js");?>"></script>
    <script src="<?php echo base_url(JS."angular.min.js");?>"></script>
    <script src="<?php echo base_url(JS."ui-utils.min.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-specification.js");?>"></script>
    <script src="<?php echo base_url(JS."ui-bootstrap-0.11.0.min.js");?>"></script>
    <script src="<?php echo base_url(JS."lodash.underscore.min.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-gui.js");?>"></script>
    <script src="<?php echo base_url(JS."endpoint.js");?>"></script>

   <!--container start-->
   <div id="endpoint_container" class="container" ng-app="elsewebGUI">

        <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h2>Venues</h2>
            </div>
            <!--feature end-->     
        </div>
      
       <div class="row" ng-controller="PanelController as panel">
        
           <div class="col-md-7 gray-bg">
                <div class="tab-panel" ng-show="panel.isSelected(1)" ng-controller="RegionController as regionCtrl"> 
                     <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <h4>Region</h4>
                              <p>Enter coordinates or drag point in map to set bounding box for the experiment.
                                 Coordinates will update on mouse out event on rectangle layer.</p>
                              <input ng-model="experiment.coordinates" disabled="true" id="boundsText" class="form-control" placeholder= "e.g. 50, -65.123, 23, -126 (N, E, S, W)" type="text"/>
                              <div class="no-data alert alert-danger">No data available. Please change bounding box coordinates</div>
                              <div class="data-available alert alert-success">Data Available</div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <!--google map start-->
                              <div class="contact-map">
                                  <div id="map-canvas"></div>
                              </div>
                               <!--google map end-->  
                          </div>     
                      </div>
                </div>   

                <div class="tab-panel" ng-show="panel.isSelected(2)">
                     <div class="row experiment-row">
                         <div class="col-md-12  gray-bg">
                             <h4>Species</h4>
                             <p>Select species</p>
                             <form ng-controller="SpeciesController as speciesCtrl">
                                 <div class="form-group">
                                     <select ng-options="s.name.value as s.name.value for s in species" ng-model="experiment.species" class="form-control blck-input">
                                         <option style="display:none" value="">select...</option> 
                                     </select>
                                 </div>
                             </form>                  
                          </div>   
                     </div>
                </div>    

                <div class="tab-panel" ng-show="panel.isSelected(3)"> 
                     <div class="row experiment-row" ng-controller="DataController as dataCrtl">
                         <div class="col-md-12 gray-bg">
                             <h4>Data</h4>
                             <p class="">Select up to 10 data sets</p>
                             <div><button ng-click="dataCrtl.addDataSet()" type="button" class="btn btn-purchase" >+ Add data set</button></div>
                             
                         </div>
                     </div>
                </div>    

               
               <div class="tab-panel" ng-show="panel.isSelected(5)">
                    <div class="row experiment-row">
                        <div class="col-md-12 gray-bg">
                            <h4>Experiment Specification</h4>
                                <div class="form-group">
                                    <textarea id="experiment" name="experiment" rows="22" style="width: 100%"></textarea>
                                </div>                 
                        </div>
                    </div>    
               </div>
               
               
               <div class="tab-panel" ng-show="panel.isSelected(5)">
                    <div class="row experiment-row">
                        <div class="col-md-12 gray-bg">
                            <h4>Retrived Datasets</h4>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>DatasetURI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = "row in datasetURI_Test">
                                            <td>{{row.dataset.value}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>    
               </div>              
            

                <div class="row experiment-row" ng-controller="SubmissionController as SubmissionCtrl">
                    <div class="col-md-12 gray-bg" style="margin-bottom: 10px">
                        <section class="tab-menu">
                            <ul class="nav nav-pills">
                                <li ng-class="{ active: panel.isSelected(1) }">
                                    <a href ng-click="panel.selectTab(1)">Region</a>
                                </li>
                                <li id="test" ng-class="{ active: panel.isSelected(2), inactive: experiment.coordinates == '' }">
                                    <a href ng-disabled="true" ng-click="panel.selectTab(2)">Species</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(3), inactive: experiment.coordinates == '' }">
                                    <a href ng-click="panel.selectTab(3)">Datasets</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(4), inactive: datasets == '' }">
                                    <a href ng-click="panel.selectTab(4)">Algorithm</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(5), inactive: experiment.algorithm == '' }">
                                    <a href ng-click="panel.selectTab(5); SubmissionCtrl.processAssemble()">Review</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(6), inactive: datasetURI == null }">
                                    <a href ng-click="panel.selectTab(6); SubmissionCtrl.submitExperiment('storeExperiment')">Submit</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>    
           </div>
           
           <div class="col-md-4 gray-bg col-md-push-1">
               <h4>Experiment Summary</h4>
               <p><b>Region Bounds: </b><span ng-bind="experiment.coordinates"></span> </p>
               <p><b>Species: </b><span ng-bind="experiment.species"></span></p>
               <p><b>Datasets: </b><span></span></p>
               <div class="eq-len">
                    <table id="datasetParams" class="table table-striped">
                            <thead>
                                <th>Start</th>   
                                <th>End</th>  
                                <th>Entity</th>
                                <th>Char</th>
                                <th>Source</th>
                            </thead>
                            <tbody>
                                <tr ng-repeat = "row in datasets">
                                    <td>{{row.start}}</td>       
                                    <td>{{row.end}}</td>  
                                    <td>{{row.entity.slice(59)}}</td>
                                    <td>{{row.characteristic.slice(59)}}</td>
                                    <td>{{row.source.slice(59)}}</td>
                                </tr>
                            </tbody>    
                    </table>
               </div>
               <p><b>Algorithm: </b><span ng-bind="experiment.algorithm.slice(79)"></span></p>   
               <div class="eq-len">
                    <table id="algorithmParamsSummary" class="table table-striped">
                            <thead>
                                <th>Parameter</th>   
                                <th>Value</th>   
                            </thead>
                            <tbody>
                                <tr ng-repeat = "row in filteredparams.items">
                                    <td>{{row.paramName.value}}</td>       
                                    <td>{{row.default.value}}</td>  
                                </tr>
                            </tbody>    
                    </table>
             </div>
           </div>
 
       </div>    
        
    </div>    
    <!--container end-->
    

