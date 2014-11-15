package eightHundredAndTwo;

import java.io.IOException;
import java.util.List;
import java.util.ArrayList;
import eightHundredAndTwo.model.Scripture;
import eightHundredAndTwo.model.ScriptureDataHandler;
import eightHundredAndTwo.model.HardCodedScriptureHandler;
import eightHundredAndTwo.model.FileScriptureHandler;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ShowList
 */
@WebServlet("/ShowList")
public class ShowList extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public ShowList() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		ScriptureDataHandler handler = new FileScriptureHandler("list.txt");
	       request.setAttribute("scriptures", handler.getFavoriteScriptures());

	       request.getRequestDispatcher("viewPosts.jsp").forward(request, response);
	       }
	

}
