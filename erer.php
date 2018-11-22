<?php
public static boolean getPath(int x,int y,ArrayList<Point> path){
		Point p=new Point(x,y);
		path.add(p);
		if(x==0&&y==0)
			return true;//找到路径
		
		boolean success=false;
		if(x>=1&&isFree(x-1,y))//向左走
			success=getPath(x-1,y, path);
		if(y>=1&&isFree(x,y-1))
			success=getPath(x,y-1,path);
		
		if(!success)
			path.add(p);//错误路径
		 
		return success;
		
	}


?>