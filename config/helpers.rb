module ApplicationHelpers
  def page_title
    title = []
    title << current_page.data.title if current_page.data.title
    title << "Academy for Eating Disorders"
    title.join(" - ")
  end

  def page_description
    data.page.description || "The Academy for Eating Disorders is a global professional association committed to leadership in eating disorders research, education, treatment and prevention."
  end

  def page_classes
    classes = []
    classes << super.split(/\W+/)
    classes << yield_content(:page_class) if content_for?(:page_class)
    classes.flatten.uniq.join(" ")
  end
end
