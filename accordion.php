<div class="infocollapse">	
	<div class="panel panel-default">
		<div id="r2" class="panel-collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
		  <div class="panel-body">
		  <!---body--->
			<div class="col-xs-7">
				<input list="urlservice2" name="urlservice2" id="urlservice" class="form-control col-md-7 col-xs-12 input-sm" placeholder="http://localhost:8080/geoserver/dothanhlong/wms?service=WMS&version=1.1.0&request=GetMap&layers=dothanhlong:tram_khitruong&styles=&bbox=103.485,7.558611111,111.7444444,11.85416667&width=768&height=399&srs=EPSG:4326&format=application/openlayers">
				<datalist id="urlservice2">
					<option value="http://portal.hcmgis.vn/geoserver/wms?">
					<option value="https://maps.hcmgis.vn/geoserver/ows">
					<option value="https://www.gebco.net/data_and_products/gebco_web_services/web_map_service/mapserv?">
					<option value="Safari">
					<option value="Safari">
					<option value="Safari">
					<option value="Safari">
				</datalist>
				<button type="button" class="btn btn-default btn-sm" onclick="get_layers();">Get Layer</button>
			</div>
			<div class="col-xs-5">
				<select name="layerSelection" id="layerSelection" class="form-control col-md-7 input-sm">
					<option value="none">Choose layer</option>
				</select>					
				<button type="button" class="btn btn-default btn-sm" onclick="addmap();">Add</button>
				<button type="button" class="btn btn-default btn-sm" 
				onclick="removemap();">Remove</button>
				<button type="button" class="btn btn-default btn-sm" 
				onclick="downloadmap();">Get Map</button>
			</div>
			<!---endbody--->
		  </div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
		  <h4 class="panel-title">
			<a role="button" data-toggle="collapse" data-parent="#accordion" href="#r5" aria-expanded="false" aria-controls="r5" class="collapsed">
				Service Info
			</a>
		  </h4>
		</div>
		<div id="r5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
		  <div class="panel-body">
		  <!---body--->
			<div class="col-xs-12">
				<pre id="serviceinfo" height="auto">Nothing here :p</pre>
			</div>
			<!---endbody--->
		  </div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
		  <h4 class="panel-title">
			<a role="button" data-toggle="collapse" data-parent="#accordion" href="#r6" aria-expanded="false" aria-controls="r6" class="collapsed">
				Track logs
			</a>
		  </h4>
		</div>
		<div id="r6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
		  <div class="panel-body">
		  <!---body--->
			<div class="col-xs-12">
				<pre id="tracklogs" height="auto">
Author:Đỗ Thành Long (soiqualang_chentreu)
---
13/07/2018 (Thứ 6 ngày 13 :p )
App version 1;
Cho phép nhập địa chỉ service và get các WMS layers về;
Hiển thị WMS layers;
Cho phép download dữ liệu shapefile, KML, GeoJson, CSV nếu dịch vụ cung cấp WFS.
---
14/07/2018
Thêm vào danh sách một số nguồn Open WMS Service.
Nguồn:
https://www.gebco.net/data_and_products/gebco_web_services/web_map_service/

				</pre>				
			</div>
			<!---endbody--->
		  </div>
		</div>
	</div>
</div>