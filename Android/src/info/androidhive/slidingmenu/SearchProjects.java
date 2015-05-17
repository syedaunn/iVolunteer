package info.androidhive.slidingmenu;

import java.util.ArrayList;

import android.app.AlertDialog;
import android.app.Fragment;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.Toast;

public class SearchProjects extends Fragment {


	protected CharSequence[] careAbout = { "Animals", "Arts", "Culture", "Civil Rights", "Education", "Disaster Relief" };
	protected CharSequence[] goodAt = { "Accounting","Branding","Coaching","Communication","Data Analysis" };
	protected ArrayList<CharSequence> selectedCareAbout = new ArrayList<CharSequence>();
	protected ArrayList<CharSequence> selectedGoodAt = new ArrayList<CharSequence>();

	Button filterCareAbout;
	Button filterGoodAt;
	
	public SearchProjects(){}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container,
			Bundle savedInstanceState) {

		View rootView = inflater.inflate(R.layout.fragment_photos, container, false);

		return rootView;
	}
	@Override
	public void onActivityCreated(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onActivityCreated(savedInstanceState);
		filterGoodAt=(Button)getActivity().findViewById(R.id.myFilter1);
		filterCareAbout=(Button)getActivity().findViewById(R.id.myFilter2);
		filterGoodAt.setOnClickListener(new OnClickListener() {

			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showGoodAtDialog();

			}
		});
		filterCareAbout.setOnClickListener(new OnClickListener() {

			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showCareAboutDialog();

			}
		});
	}
	protected void showGoodAtDialog() {

		boolean[] checkedGoodAt = new boolean[goodAt.length];

		int count = goodAt.length;

		for(int i = 0; i < count; i++)

			checkedGoodAt[i] = selectedGoodAt.contains(goodAt[i]);

		DialogInterface.OnMultiChoiceClickListener coloursDialogListener = new DialogInterface.OnMultiChoiceClickListener() {

			@Override
			public void onClick(DialogInterface dialog, int which, boolean isChecked) {

				if(isChecked){
					selectedGoodAt.add(goodAt[which]);
				}
				else{
					selectedGoodAt.remove(goodAt[which]);
				}

				onChangeSelectedGoodAt();

			}

		};

		AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());

		builder.setTitle("Select Colours");

		builder.setMultiChoiceItems(goodAt, checkedGoodAt, coloursDialogListener);

		AlertDialog dialog = builder.create();

		dialog.show();

	}

	protected void showCareAboutDialog() {

		boolean[] checkedCareAbout = new boolean[careAbout.length];

		int count = careAbout.length;

		for(int i = 0; i < count; i++)

			checkedCareAbout[i] = selectedCareAbout.contains(careAbout[i]);

		DialogInterface.OnMultiChoiceClickListener coloursDialogListener = new DialogInterface.OnMultiChoiceClickListener() {

			@Override
			public void onClick(DialogInterface dialog, int which, boolean isChecked) {

				if(isChecked){
					selectedCareAbout.add(careAbout[which]);
				}
				else{
					selectedCareAbout.remove(careAbout[which]);
				}

				onChangeSelectedCareAbout();

			}

		};

		AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());

		builder.setTitle("Select Colours");

		builder.setMultiChoiceItems(careAbout, checkedCareAbout, coloursDialogListener);

		AlertDialog dialog = builder.create();

		dialog.show();

	}

	protected void onChangeSelectedCareAbout() {
		// TODO Auto-generated method stub
		StringBuilder stringBuilder = new StringBuilder();

		  for(CharSequence colour : selectedCareAbout)

		    stringBuilder.append(colour + ",");

		 filterCareAbout.setText(stringBuilder.toString());
		
	}
	protected void onChangeSelectedGoodAt() {
		// TODO Auto-generated method stub
		StringBuilder stringBuilder = new StringBuilder();

		  for(CharSequence colour : selectedGoodAt)

		    stringBuilder.append(colour + ",");

		 filterGoodAt.setText(stringBuilder.toString());
		
	}
}
