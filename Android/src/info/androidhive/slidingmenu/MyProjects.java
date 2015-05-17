package info.androidhive.slidingmenu;

import java.util.ArrayList;

import android.app.AlertDialog;
import android.app.Fragment;
import android.app.AlertDialog.Builder;
import android.content.Context;
import android.content.DialogInterface;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.AbsListView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.AbsListView.OnScrollListener;

public class MyProjects extends Fragment {

	MyCustomAdapter adapter=null;
	ArrayList<POJO> projects;
	ListView projectsList;
	POJO project;


	public MyProjects(){}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container,
			Bundle savedInstanceState) {

		View rootView = inflater.inflate(R.layout.fragment_find_people, container, false);
		project=new POJO();
		project.setImgName("nope");
		project.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project.setProjectTitle("My Project");
		return rootView;
	}

	@Override
	public void onActivityCreated(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onActivityCreated(savedInstanceState);
		project=new POJO(); 
		project.setImgName("nope");
		project.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project.setProjectTitle("My Project");


		projectsList=(ListView)getActivity().findViewById(R.id.listAllMyProjects);
		projects=new ArrayList<POJO>();

		adapter=new MyCustomAdapter(getActivity(),R.layout.project_list_view,projects);
		projectsList.setAdapter(adapter);
		projectsList.setTextFilterEnabled(true);	
		projectsList.setOnScrollListener(new OnScrollListener(){

			@Override
			public void onScrollStateChanged(AbsListView view, int scrollState) {
				// TODO Auto-generated method stub
				if(scrollState==SCROLL_STATE_IDLE){
					if(projectsList.getLastVisiblePosition()>=(projectsList.getCount()-1)){
						displayResults();
					}					
				}				
			}
			@Override
			public void onScroll(AbsListView view, int firstVisibleItem,
					int visibleItemCount, int totalItemCount) {				
			}

		});
		displayResults();


	}

	public void displayResults(){		

		
		
		POJO project2=new POJO();
		project2.setImgName("nope");
		project2.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project2.setProjectTitle("My Project");
		
		projects.add(project2);
		adapter.add(project2);
		
		
		POJO project3=new POJO();
		project3.setImgName("nope");
		project3.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project3.setProjectTitle("My Project");
		
		projects.add(project3);
		adapter.add(project3);
		
		POJO project4=new POJO();
		project4.setImgName("nope");
		project4.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project4.setProjectTitle("My Project");
		
		projects.add(project4);
		adapter.add(project4);
		
		POJO project5=new POJO();
		project5.setImgName("nope");
		project5.setProjectDesc("This is the project description. HAHHAHAHAHAHHAHA");
		project5.setProjectTitle("My Project");
		
		projects.add(project5);
		adapter.add(project5);
		adapter.notifyDataSetChanged();

	}
	
	private class MyCustomAdapter extends ArrayAdapter<POJO> {

		private ArrayList<POJO> projects;
		View view;

		public MyCustomAdapter(Context context, int textViewResourceId,
				ArrayList<POJO> projects) {
			super(context, textViewResourceId, projects);
			this.projects = new ArrayList<POJO>();
			this.projects.addAll(projects);
		}

		private  class ViewHolder{
			TextView projectTitle;
			TextView projectDesc;
			TextView details;
			ImageView img;



		}

		public void add(POJO project){
			this.projects.add(project);
		}

		@Override

		public View getView(int position, View convertView, ViewGroup parent) {

			view=convertView;
			final ViewHolder holder ;
			Log.v("ConvertView", String.valueOf(position));
			if (this.view == null) {

				LayoutInflater vi = (LayoutInflater)getActivity().getSystemService(
						Context.LAYOUT_INFLATER_SERVICE);
				this.view = vi.inflate(R.layout.project_list_view, null);

				holder = new ViewHolder();
				holder.projectTitle = (TextView)this.view.findViewById(R.id.textView1);
				holder.img= (ImageView) this.view.findViewById(R.id.imageView1);
				holder.details = (TextView) this.view.findViewById(R.id.textView3);
				holder.projectDesc=(TextView) this.view.findViewById(R.id.textView2);
				this.view
				.setTag(holder);

			} else {
				holder = (ViewHolder) this.view.getTag();
			}



			final int pos=position;

			final POJO project = this.projects.get(position);
			holder.projectDesc.setText(project.getProjectDesc());
			holder.projectTitle.setText(project.getProjectTitle());
			holder.details.setOnClickListener(new View.OnClickListener(){
				@Override
				public void onClick(View v) {
					// TODO Auto-generated method stub				

				}
			});

			return view;


		}
	}

}
