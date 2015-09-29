{load_presentation_object filename="eventController" foldername="public" assign="obj"}
<div class="row banner">
	<div class="col-md-12">
		<p><img class="img-responsive" src="/images/events/bronxpark.png" style="float:right;"></p>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="panel">
			<div class="panel-heading">
				<h3>{$obj->mP[ 'title' ]}</h3>
			</div>
			<div class="panel-footer">
				<p>When: <b>{date('l F jS', strtotime($obj->mP[ 'date' ]))} at {date( 'H:ia', strtotime($obj->mP[ 'time' ]))}</b></p>
				<p>Where: <a href=""></a><b>Allerton Ballfields, Bronx Park</b></a></p>
                <iframe src="https://mapsengine.google.com/map/embed?mid=zFjlaaorFfQM.kTSGS7U_leY8" width="100%" height="480" frameborder="0"></iframe>
				<p>&nbsp;</p>
				{$obj->mP[ 'description' ]}
			</div>
			<div class="panel-heading">
				<h3>Directions to the events:</h3>
			</div>
			<div class="panel-footer">
				<p>	You can get to the event  in the following ways!</p>
				<h3 id="car">By Car:</h3>
				<p>Click <a href="https://www.google.com/maps/dir//Allerton+Ballfieds,+Bronx,+NY+10467/@40.8689728,-73.8753525,17z/data=!4m13!1m4!3m3!1s0x89c2f36f9679aa15:0x8fdc6786201f0b0f!2sAllerton+Ballfieds!3b1!4m7!1m0!1m5!1m1!1s0x89c2f36f9679aa15:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728" target="_blank">here</a> to get directions to the event through google maps.</p>
				<p><b>Triborough Bridge, New York, NY 10035</b></p>
				<div class="odd">1. Head southeast on Robert F Kennedy Brg 0.3 mi</div>
				<div class="even">2. Take left ramp onto I-278 E (Robert F Kennedy Bridge Appr) toward Bronx/Upstate N Y/New England 0.6 mi</div>
				<div class="odd">3. Take the exit toward Bruckner Expwy/New Haven onto I-278 E (Bruckner Expy) 1.9 mi</div>
				<div class="even">4. Take the left exit toward New Haven onto I-278 E (Bruckner Expy) 0.7 mi</div>
				<div class="odd">5. Take exit 52 toward Bronx River Pkwy North/White Plains onto Bruckner Blvd 0.3 mi</div>
				<div class="even">6. Take ramp onto Bronx River Pkwy N toward Bronx River Pkwy North/White Plains 3.1 mi</div>
				<div class="odd">7. Take exit 8W toward Mosholu Pkwy onto Dr Theodore Kazimiroff Blvd 0.6 mi</div>
				<div class="even">8. Make a U-Turn onto Dr Theodore Kazimiroff Blvd 400 ft</div>
				<div class="odd">9. Arrive at Dr Theodore Kazimiroff Blvd. Your destination is on the left</div>
				
				<h3 id="train">By Train:</h3>
				<p>To get to the event by train you have the following options:</p>
				<div><p>Take the <span style="font-weight:bold;font-style:italic;">D</span> train to <span style="font-weight:bold;">Norwood - 205 Street</span> station. Click <a href="https://www.google.com/maps/dir/Norwood+-+205+St/Allerton+Ballfieds/@40.8719824,-73.8816169,16z/am=t/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x89c2f37240f66013:0x791ff282b8190339!2m2!1d-73.878855!2d40.874811!1m5!1m1!1s0x0:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728" target="_blank">here</a> to see directions from this train station to the event</a></p></div>
				<div><p>Or take the <span style="font-weight:bold;font-style:italic;">2 or 5</span> train to <span style="font-weight:bold;">Allerton Ave</span> station. Click <a href="https://www.google.com/maps/dir/Allerton+Av/Allerton+Ballfieds/@40.8672069,-73.8760083,16z/am=t/data=!4m14!4m13!1m5!1m1!1s0x89c2f367b93ddc99:0x3030605ee2da9663!2m2!1d-73.8673519!2d40.8654384!1m5!1m1!1s0x0:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728!3e2" target="_blank">here</a> to see directions from this train station to the event</p></div>
				
				<h3 id="bus">By Bus:</h3>
				<p>To get to the event by bus the following buses are recommended: </p>
				<div><p>Take the Bx39 to Allerton Ave. stop. Click <a href="https://www.google.com/maps/dir/Allerton+Av%2FWhite+Plains+Rd/Allerton+Ballfieds/@40.8672029,-73.8740237,17z/am=t/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x89c2f367b6c303b9:0xa8b098ca993cede!2m2!1d-73.867874!2d40.865505!1m5!1m1!1s0x0:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728" target="_blank">here</a> to see directions to the event from this stop.</p></div>
				<div><p>Take Bx26 to Barker Ave. stop. Click <a href="https://www.google.com/maps/dir/Allerton+Av%2FBarker+Av/Allerton+Ballfieds/@40.8672029,-73.8748822,17z/am=t/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x89c2f3664316b167:0x960f9ecc123d1233!2m2!1d-73.869591!2d40.865471!1m5!1m1!1s0x0:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728" target="_blank">here</a> to see directions to the event from this stop.</p></div>
				<div><p>Take Bx41 or BX41-SBS to Webster Ave/E. 204 Street stop. Click <a href="https://www.google.com/maps/dir/Webster+Av%2FE+204+St/Allerton+Ballfieds/@40.8701805,-73.877976,17z/am=t/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x89c2f36e3ab9c02b:0xc23151373adb3c42!2m2!1d-73.876404!2d40.871342!1m5!1m1!1s0x0:0x8fdc6786201f0b0f!2m2!1d-73.8753525!2d40.8689728" target="_blank">here</a> to see directions to the event from this stop.</p></div>
			</div>
			{include file="public/eventschedule.tpl"}
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">
				<h3>Directions to the event</h3>
			</div>
			<div class="panel-footer">
				<p>By <a href="#car">Car</a></p>
				
				
				<p>By <a href="#bus">Bus</a></p>
				
				<p>By <a href="#train">Train</a></p>
			</div>
		</div>
	</div>
</div>