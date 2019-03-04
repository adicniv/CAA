<?php
/******
 * 12.16.1 Spatial Function Reference
 */

/******
 * Construct geometry collection from geometries
 */GeomCollection()

/*********
 *Construct geometry collection from geometries
 */GeometryCollection()

/*********
 *Construct LineString from Point values
 */LineString()

/***********
 *Whether MBR of one geometry contains MBR of another
 */MBRContains()

/*********
 *Whether one MBR is covered by another
 */MBRCoveredBy()

/**********
 *Whether one MBR covers another
 */MBRCovers()

/***********
 *Whether MBRs of two geometries are disjoint
 */MBRDisjoint()

/*********
 *Whether MBRs of two geometries are equal
 */MBREquals()

/*********
 *Whether MBRs of two geometries intersect
 */MBRIntersects()

/*********
 *Whether MBRs of two geometries overlap
 */MBROverlaps()

/***********
 *Whether MBRs of two geometries touch
 */MBRTouches()

/*********
 *Whether MBR of one geometry is within MBR of another
 */MBRWithin()

/**********
 *Contruct MultiLineString from LineString values
 */MultiLineString()

/***********
 *Construct MultiPoint from Point values
 */MultiPoint()
/*********
 *Construct MultiPolygon from Polygon values
 */MultiPolygon()
/***********
 *Construct Point from coordinates
 */Point()
/*********
 *Construct Polygon from LineString arguments
 */Polygon()
/**********
 *Return Polygon or MultiPolygon area
 */ST_Area()
/***********
 *Convert from internal geometry format to WKB
 */ST_AsBinary(), ST_AsWKB()
/*********
 *Generate GeoJSON object from geometry
 */ST_AsGeoJSON()
/**********
 *Convert from internal geometry format to WKT
 */ST_AsText(), ST_AsWKT()
/***********
 *Return geometry of points within given distance from geometry
 */ST_Buffer()
/*********
 *Produce strategy option for ST_Buffer()
 */ST_Buffer_Strategy()
/*********
 *Return centroid as a point
 */ST_Centroid()
/***********
 *Whether one geometry contains another
 */ST_Contains()
/*********
 *Return convex hull of geometry
 */ST_ConvexHull()
/**********
 *Whether one geometry crosses another
 */ST_Crosses()
/***********
 *Return point set difference of two geometries
 */ST_Difference()
/*********
 *Dimension of geometry
 */ST_Dimension()
/***********
 *Whether one geometry is disjoint from another
 */ST_Disjoint()
/*********
 *The distance of one geometry from another
 */ST_Distance()
/**********
 *Minimum distance on earth between two geometries
 */ST_Distance_Sphere()
/***********
 *	End Point of LineString
 */ST_EndPoint()
/*********
 *Return MBR of geometry
 */ST_Envelope()
/**********
 *Whether one geometry is equal to another
 */ST_Equals()
/***********
 *Return exterior ring of Polygon
 */ST_ExteriorRing()
/*********
 *Produce a geohash value
 */ST_GeoHash()
/*********
 *Return geometry collection from WKT
 */ST_GeomCollFromText(), ST_GeometryCollectionFromText(), ST_GeomCollFromTxt()
/***********
 *Return geometry collection from WKB
 */ST_GeomCollFromWKB(), ST_GeometryCollectionFromWKB()
/*********
 *Return N-th geometry from geometry collection
 */ST_GeometryN()
/**********
 *Return name of geometry type
 */ST_GeometryType()
/***********
 *Generate geometry from GeoJSON object
 */ST_GeomFromGeoJSON()
/*********
 *Return geometry from WKT
 */ST_GeomFromText(), ST_GeometryFromText()
/*********
 *	Return geometry from WKB
 */ST_GeomFromWKB(), ST_GeometryFromWKB()
/**********
 *	Return N-th interior ring of Polygon
 */ST_InteriorRingN()
/***********
 *	Return point set intersection of two geometries
 */ST_Intersection()
/*********
 *	Whether one geometry intersects another
 */ST_Intersects()
/**********
 *Whether a geometry is closed and simple
 */ST_IsClosed()
/***********
 *	Placeholder function
 */ST_IsEmpty()
/*********
 *	Whether a geometry is simple
 */ST_IsSimple()
/**********
 *Whether a geometry is valid
 */ST_IsValid()
/***********
 *	Return latitude from geohash value
 */ST_LatFromGeoHash()
/*********
 *Return latitude of Point
 */ST_Latitude()
/**********
 *Return length of LineString
 */ST_Length()
/***********
 *Construct LineString from WKT
 */ST_LineFromText(), ST_LineStringFromText()
/*********
 *Construct LineString from WKB
 */ST_LineFromWKB(), ST_LineStringFromWKB()
/**********
 *Return longitude from geohash value
 */ST_LongFromGeoHash()
/***********
 *Return longitude of Point
 */ST_Longitude()
/*********
 *Rectangle around two points
 */ST_MakeEnvelope()
/**********
 *Construct MultiLineString from WKT
 */ST_MLineFromText(), ST_MultiLineStringFromText()
/***********
 *Construct MultiLineString from WKB
 */ST_MLineFromWKB(), ST_MultiLineStringFromWKB()
/*********
 *Construct MultiPoint from WKT
 */ST_MPointFromText(), ST_MultiPointFromText()
/*********
 *Construct MultiPoint from WKB
 */ST_MPointFromWKB(), ST_MultiPointFromWKB()
/***********
 *Construct MultiPolygon from WKT
 */ST_MPolyFromText(), ST_MultiPolygonFromText()
/*********
 *Construct MultiPolygon from WKB
 */ST_MPolyFromWKB(), ST_MultiPolygonFromWKB()
/**********
 *Return number of geometries in geometry collection
 */ST_NumGeometries()
/***********
 *Return number of interior rings in Polygon
 */ST_NumInteriorRing(), ST_NumInteriorRings()
/*********
 *Return number of points in LineString
 */ST_NumPoints()
/*********
 *Whether one geometry overlaps another
 */ST_Overlaps()
/**********
 *Convert geohash value to POINT value
 */ST_PointFromGeoHash()
/***********
 *Construct Point from WKT
 */ST_PointFromText()
/*********
 *Construct Point from WKB
 */ST_PointFromWKB()
/**********
 *Return N-th point from LineString
 */ST_PointN()
/***********
 *Construct Polygon from WKT
 */ST_PolyFromText(), ST_PolygonFromText()
/*********
 *Construct Polygon from WKB
 */ST_PolyFromWKB(), ST_PolygonFromWKB()
/**********
 *Return simplified geometry
 */ST_Simplify()
/***********
 *Return spatial reference system ID for geometry
 */ST_SRID()
/*********
 *Start Point of LineString
 */ST_StartPoint()
/**********
 *Return argument with X/Y coordinates swapped
 */ST_SwapXY()
/***********
 *Return point set symmetric difference of two geometries
 */ST_SymDifference()
/*********
 *Whether one geometry touches another
 */ST_Touches()
/**********
 *Transform coordinates of geometry
 */ST_Transform()
/***********
 *Return point set union of two geometries
 */ST_Union()
/*********
 *Return validated geometry
 */ST_Validate()
/**********
 *Whether one geometry is within another
 */ST_Within()
/***********
 *Return X coordinate of Point
 */ST_X()
/*********
 *Return Y coordinate of Point
 */ST_Y()
/*********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/*********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */


/****************
 * 12.16.2 Argument Handling by Spatial Functions
 */
 /**********
  * 12.16.3 Functions That Create Geometry Values from WKT Values
  */
 /***********
  * 12.16.4 Functions That Create Geometry Values from WKB Values

  */
  /*********
   * 12.16.5 MySQL-Specific Functions That Create Geometry Values

   */
/**********
 *12.16.6 Geometry Format Conversion Functions

 */
/***********
 *12.16.7 Geometry Property Functions

 */
/*********
 * 12.16.7.1 General Geometry Property Functions
 */
/******
 * 12.16.7.2 Point Property Functions
 */
/********
 * 12.16.7.3 LineString and MultiLineString Property Functions
 */
/********
 * 12.16.7.4 Polygon and MultiPolygon Property Functions
 */
/***********
 * 12.16.7.5 GeometryCollection Property Functions
 */
/*********
 *12.16.8 Spatial Operator Functions

 */
/**********
 *12.16.9 Functions That Test Spatial Relations Between Geometry Objects

 */
/***********
 *12.16.10 Spatial Geohash Functions

 */
/*********
 *12.16.11 Spatial GeoJSON Functions

 */

/**********
 *12.16.12 Spatial Convenience Functions
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
/*********
 *
 */
/***********
 *
 */
/*********
 *
 */
/**********
 *
 */
/***********
 *
 */
/*********
 *
 */
 